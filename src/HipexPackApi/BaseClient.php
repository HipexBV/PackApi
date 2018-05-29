<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi;

use EUAutomation\GraphQL\Client as GraphQLClient;
use HipexPackApi\Exception;
use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Schema\BaseType;
use HipexPackApi\Schema\IntrospectQuery;
use HipexPackApi\Schema\SchemaType;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;
use Psr\SimpleCache\InvalidArgumentException as CacheInvalidArgumentException;

/**
 * Class Client
 *
 */
class BaseClient
{
    /**
     * Default API url
     */
    const API_URL = 'https://service.hipex.io/hipex-pack-api';

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var CacheInterface
     */
    private $tokenStorage;

    /**
     * @var GraphQLClient|null
     */
    private $client;
    
    /**
     * @var string
     */
    private $url;
    
    /**
     * @var LoggerInterface
     */
    private $log;

    /**
     * Client constructor.
     *
     * @param string $url
     * @param LoggerInterface $log
     */
    public function __construct(string $url = self::API_URL, LoggerInterface $log)
    {
        $this->client = new GraphQLClient($url);
        $this->url = $url;
        $this->log = $log;
    }

    /**
     * @param CacheInterface $tokenStorage
     */
    public function setTokenStorage(CacheInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @param string $url
     */
    public function setApiUrl(string $url)
    {
        $this->url = $url;
        $this->client->setUrl($url);
    }

    /**
     * @param string $query
     * @param array $variables
     * @param array $headers
     * @return ResponseInterface
     * @throws Exception\ExceptionInterface
     */
    public function rawQuery(string $query, array $variables = [], array $headers = []): ResponseInterface
    {
        if (empty($headers['Authorization'])) {
            try {
                $headers['Authorization'] = $this->getAuthToken();
            } catch (CacheInvalidArgumentException $e) {
                throw new Exception\RuntimeException($e->getMessage(), $e->getCode(), $e);
            }
        }

        $response = $this->client->raw($query, $variables, $headers);
        try {
            $this->setAuthToken($response);
        } catch (CacheInvalidArgumentException $e) {
            throw new Exception\RuntimeException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param BaseQuery $query
     * @param array $arguments
     * @return BaseType|BaseType[]
     * @throws Exception\ExceptionInterface
     */
    public function query(BaseQuery $query, array $arguments = [])
    {
        $response = (string) $this->rawQuery($query->getBody(), $arguments)->getBody();

        try {
            $data = \GuzzleHttp\json_decode($response, true);
        } catch (InvalidArgumentException $e) {
            throw new Exception\InvalidArgumentException($e->getMessage(), $e->getCode(), $e);
        }

        if (isset($data['errors'])) {
            $this->throwErrorResponseException($data['errors']);
        }

        if (!isset($data['data'])) {
            throw new Exception\RuntimeException('No data key found in response');
        }

        $returnKey = $query->getReturnKey();
        if (!isset($data['data'][$returnKey])) {
            throw new Exception\RuntimeException(sprintf('Response key %s not found in response', $returnKey));
        }

        $returnType = $query->getReturnType();
        if (!$query->getReturnArray()) {
            $returnType->setData($data['data'][$returnKey]);
            return $returnType;
        }

        $result = [];
        foreach ($data['data'][$returnKey] as $item) {
            $object = clone $returnType;
            $object->setData($item);
            $result[] = $object;
        }
        return $result;
    }

    /**
     * @return bool
     * @throws Exception\RuntimeException
     */
    public function hasToken(): bool
    {
        try {
            return (bool) $this->getAuthToken();
        } catch (CacheInvalidArgumentException $e) {
            throw new Exception\RuntimeException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * @return SchemaType
     * @throws Exception\ExceptionInterface
     */
    public function introspect(): SchemaType
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->query(new IntrospectQuery());
    }

    /**
     * @return string|null
     * @throws CacheInvalidArgumentException
     */
    private function getAuthToken()
    {
        if ($this->token) {
            return $this->token;
        }

        if ($this->tokenStorage) {
            $this->token = $this->tokenStorage->get($this->getCacheKey());
        }

        return $this->token;
    }

    /**
     * @param ResponseInterface $response
     * @throws Exception\RuntimeException
     * @throws CacheInvalidArgumentException
     */
    private function setAuthToken(ResponseInterface $response)
    {
        $auth = $response->getHeader('Authorization');
        if (empty($auth)) {
            return;
        }

        if ($this->token === $auth[0]) {
            return;
        }

        $this->token = $auth[0];
        $this->log->info(sprintf('[%s] Received new auth token', __CLASS__));
        if ($this->tokenStorage) {
            $this->tokenStorage->set($this->getCacheKey(), $auth[0]);
        }
    }

    /**
     * @return string
     */
    private function getCacheKey(): string
    {
        return 'hipex-pack-api.auth-token.' . md5($this->url);
    }

    /**
     * @throws Exception\QueryErrorException
     */
    private function throwErrorResponseException(array $errorData)
    {
        $errors = [];
        foreach ($errorData as $error) {
            $errors[] = $this->createQueryError($error);
        }

        throw new Exception\QueryErrorException($errors);
    }

    /**
     * @param array $error
     * @return Exception\QueryError\QueryErrorInterface
     */
    private function createQueryError(array $error): Exception\QueryError\QueryErrorInterface
    {
        if (isset($error['message'])) {
            $message = $error['message'];
            unset($error['message']);
        } else {
            $message = '';
        }

        if ($message === 'FormValidation::failed') {
            return new Exception\QueryError\ValidationError($message, $error);
        }

        return new Exception\QueryError\QueryError($message, $error);
    }
}