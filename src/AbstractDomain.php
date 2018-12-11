<?php

namespace XFApi;

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

    public function requestGet($endpoint, array $params = [], array $headers = [])
    {
        return $this->getApiClient()->requestGet($endpoint, $params, $headers);
    }

    public function requestPost($endpoint, array $data = [], array $headers = [])
    {
        return $this->getApiClient()->requestPost($endpoint, $data, $headers);
    }

    public function request($method, $uri, array $params = [], array $data = [], array $headers = [])
    {
        return $this->getApiClient()->request($method, $uri, $params, $data, $headers);
    }

    protected abstract function getUri($uri, array $params);
    protected abstract function getDto(array $attributes);
}