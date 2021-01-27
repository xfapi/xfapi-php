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
     * @param string|null $saveTo
     *
     * @return array
     * @throws XFApiException
     */
    public function get($endpoint, array $params = [], array $headers = [], $saveTo = null)
    {
        return $this->getApiClient()->get($endpoint, $params, $headers, $saveTo);
    }

    /**
     * @param $endpoint
     * @param array $params
     * @param array $data
     * @param array $headers
     *
     * @return array
     * @throws XFApiException
     */
    public function post($endpoint, array $params = [], array $data = [], array $headers = [])
    {
        return $this->getApiClient()->post($endpoint, $params, $data, $headers);
    }

    /**
     * @param $endpoint
     * @param array $params
     * @param array $data
     * @param array $headers
     *
     * @return array
     * @throws XFApiException
     */
    public function put($endpoint, array $params = [], array $data = [], array $headers = [])
    {
        return $this->getApiClient()->put($endpoint, $params, $data, $headers);
    }

    /**
     * @param $endpoint
     * @param array $params
     * @param array $data
     * @param array $headers
     *
     * @return array
     * @throws XFApiException
     */
    public function patch($endpoint, array $params = [], array $data = [], array $headers = [])
    {
        return $this->getApiClient()->patch($endpoint, $params, $data, $headers);
    }

    /**
     * @param $endpoint
     * @param array $data
     * @param array $headers
     *
     * @return array
     * @throws XFApiException
     */
    public function delete($endpoint, array $data = [], array $headers = [])
    {
        return $this->getApiClient()->delete($endpoint, $data, $headers);
    }

    /**
     * @param $method
     * @param $endpoint
     * @param array $params
     * @param array $data
     * @param array $headers
     *
     * @return array
     *
     * @throws XFApiException
     */
    public function request($method, $endpoint, array $params = [], array $data = [], array $headers = [])
    {
        return $this->getApiClient()->request($method, $endpoint, $params, $data, $headers);
    }
    
    /**
     * @param array $attributes
     *
     * @return AbstractItemDto
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

    /**
     * @param $class
     * @param array $items
     * @param array $tree
     *
     * @return AbstractTreeDto
     */
    protected function getTreeDto($class, array $items, array $tree)
    {
        return new $class($items, $tree);
    }

    abstract protected function getUri($uri, array $params);
}
