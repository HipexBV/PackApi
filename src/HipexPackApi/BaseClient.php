<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi;

use EUAutomation\GraphQL\Client as GraphQLClient;
use EUAutomation\GraphQL\Response;
use HipexPackApi\Exception;
use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Schema\BaseType;
use InvalidArgumentException;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
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
    private $cache;

    /**
     * @var GraphQLClient|null
     */
    private $client;

    /**
     * Client constructor.
     *
     * @param GraphQLClient|null $client
     */
    public function __construct(GraphQLClient $client = null)
    {
        $this->client = $client ?: new GraphQLClient(self::API_URL);
    }

    /**
     * @param CacheInterface $cache
     */
    public function setCache(CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    /**
     * @param string $query
     * @param array $variables
     * @param array $headers
     * @return Response
     */
    public function response($query, $variables = [], $headers = [])
    {
        try {
            $response = parent::response($query, $variables, $headers);
        } catch (\Exception $e) {

        }

        if ($response->hasErrors()) {
            throw new Exception\RuntimeException(implode(PHP_EOL, $response->errors()));
        }

        return $response;
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
     * @return Response
     * @throws Exception\ExceptionInterface
     */
    public function introspect(): Response
    {
        return $this->response(file_get_contents(__DIR__ . '/introspect.graphql'));
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

        if ($this->cache) {
            $this->token = $this->cache->get(__CLASS__ . '/auth-token');
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
        if ($this->cache) {
            $this->cache->set(__CLASS__ . '/auth-token', $auth[0]);
        }
    }
}