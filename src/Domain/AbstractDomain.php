<?php

namespace XFApi\Domain;

use XFApi\Client;
use XFApi\Dto\AbstractItemDto;
use XFApi\Dto\AbstractPaginatedDto;
use XFApi\Dto\PaginationDto;
use XFApi\Exception\XFApiException;

/**
 * Class AbstractEndpoint
 * @package XFApi
 *
 * @property Client $apiClient
 */
abstract class AbstractDomain
{
    protected $apiClient;

    public function __construct(Client $apiClient)
    {
        $this->setApiClient($apiClient);
    }

    /**
     * @return Client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * @param Client $apiClient
     */
    public function setApiClient(Client $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @param $endpoint
     * @param array $params
     * @param array $headers
     *
     * @return array
     */
    public function get($endpoint, array $params = [], array $headers = [])
    {
        return $this->getApiClient()->get($endpoint, $params, $headers);
    }

    /**
     * @param $endpoint
     * @param array $data
     * @param array $headers
     *
     * @return array
     */
    public function post($endpoint, array $data = [], array $headers = [])
    {
        return $this->getApiClient()->post($endpoint, $data, $headers);
    }

    /**
     * @param $endpoint
     * @param array $data
     * @param array $headers
     *
     * @return array
     */
    public function put($endpoint, array $data = [], array $headers)
    {
        return $this->getApiClient()->put($endpoint, $data, $headers);
    }

    /**
     * @param $endpoint
     * @param array $data
     * @param array $headers
     *
     * @return array
     */
    public function patch($endpoint, array $data = [], array $headers)
    {
        return $this->getApiClient()->patch($endpoint, $data, $headers);
    }

    /**
     * @param $endpoint
     * @param array $data
     * @param array $headers
     *
     * @return array
     */
    public function delete($endpoint, array $data = [], array $headers)
    {
        return $this->getApiClient()->delete($endpoint, $data, $headers);
    }

    /**
     * @param $method
     * @param $uri
     * @param array $params
     * @param array $data
     * @param array $headers
     *
     * @return array
     *
     * @throws XFApiException
     */
    public function request($method, $uri, array $params = [], array $data = [], array $headers = [])
    {
        return $this->getApiClient()->request($method, $uri, $params, $data, $headers);
    }

    /**
     * @param array $attributes
     * @return PaginationDto
     */
    protected function getPaginationDto(array $attributes)
    {
        return $this->getDto(PaginationDto::class, $attributes);
    }

    /**
     * @param $class
     * @param array $attributes
     * @return AbstractItemDto
     */
    protected function getDto($class, array $attributes)
    {
        return new $class($attributes);
    }

    /**
     * @param $class
     * @param array $items
     * @return AbstractItemDto[]
     */
    protected function getDtos($class, array $items)
    {
        $return = [];
        foreach ($items as $key => $attributes) {
            $return[$key] = $this->getDto($class, $attributes);
        }

        return $return;
    }

    /**
     * @param $class
     * @param array $items
     * @param array $pagination
     *
     * @return AbstractPaginatedDto
     */
    protected function getPaginatedDto($class, array $items, array $pagination)
    {
        return new $class($items, $pagination);
    }

    protected abstract function getUri($uri, array $params);
}