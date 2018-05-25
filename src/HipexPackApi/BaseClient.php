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
use Psr\SimpleCache\CacheInterface;

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
     * Client constructor.
     *
     * @param string $url
     */
    public function __construct(string $url = self::API_URL)
    {
        $this->client = new GraphQLClient($url);
        $this->url = $url;
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
     */
    public function rawQuery(string $query, array $variables = [], array $headers = []): ResponseInterface
    {
        if (empty($headers['Authorization'])) {
            $headers['Authorization'] = $this->getAuthToken();
        }

        $response = $this->client->raw($query, $variables, $headers);
        $this->setAuthToken($response);

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
            throw new Exception\RuntimeException(implode(PHP_EOL, array_column($data['errors'], 'message')));
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
        return (bool) $this->getAuthToken();
    }

    /**
     * @return SchemaType
     * @throws Exception\ExceptionInterface
     */
    public function introspect(): SchemaType
    {
        return $this->query(new IntrospectQuery());
    }

    /**
     * @return string|null
     * @throws Exception\RuntimeException
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
     */
    private function setAuthToken(ResponseInterface $response)
    {
        $auth = $response->getHeader('Authorization');
        if (empty($auth)) {
            return;
        }

        $this->token = $auth[0];
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
}