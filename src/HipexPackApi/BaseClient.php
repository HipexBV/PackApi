<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi;

use EUAutomation\GraphQL\Client as GraphQLClient;
use EUAutomation\GraphQL\Response;
use HipexPackApi\Exception;
use Psr\Http\Message\ResponseInterface;
use Psr\SimpleCache\CacheInterface;

/**
 * Class Client
 *
 */
class BaseClient extends GraphQLClient
{
    /**
     * Directory containing graphql queries
     */
    const QUERY_DIRECTORY = __DIR__ . '/Generated/queries';

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
     * Client constructor.
     *
     * @param string $url
     */
    public function __construct(string $url = self::API_URL)
    {
        parent::__construct($url);
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
            throw new Exception\RuntimeException($e->getMessage(), $e->getCode(), $e);
        }

        if ($response->hasErrors()) {
            throw new Exception\RuntimeException(implode(PHP_EOL, $response->errors()));
        }

        return $response;
    }

    /**
     * {@inheritdoc}
     */
    public function raw($query, $variables = [], $headers = [])
    {
        if (empty($headers['Authorization'])) {
            $headers['Authorization'] = $this->getAuthToken();
        }

        $response = parent::raw($query, $variables, $headers);
        $this->setAuthToken($response);

        return $response;
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
     * @param string $method
     * @param array $arguments
     * @return Response
     * @throws Exception\ExceptionInterface
     */
    protected function call(string $method, array $arguments = []): Response
    {
        $file = self::QUERY_DIRECTORY . DIRECTORY_SEPARATOR . $this->getMethodFile($method);
        if (!file_exists($file)) {
            throw new Exception\BadMethodCallException(sprintf('Method %s::%s not found.', static::class, $method));
        }

        return $this->response(file_get_contents($file), $arguments);
    }

    /**
     * @param string $name
     * @return string
     */
    private function getMethodFile(string $name): string
    {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $name, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match === strtoupper($match) ? strtolower($match) : lcfirst($match);
        }
        return implode('-', $ret) . '.graphql';
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