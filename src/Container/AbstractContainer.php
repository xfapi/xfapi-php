<?php

namespace XFApi\Container;

use XFApi\Client;
use XFApi\Domain\AbstractDomain;
use XFApi\Exception\XFApiException;

/**
 * Class AbstractContainer
 * @package XFApi\Container
 *
 * @property Client $apiClient
 */
abstract class AbstractContainer
{
    protected $apiClient;

    protected $_domains;

    protected $_domainCache = [];

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
     * @param string $name
     * @return AbstractDomain
     * @throws XFApiException
     */
    public function __get($name)
    {
        if(isset($this->_domains[$name])) {
            if(!isset($this->_domainCache[$name])) {
                $class = $this->_domains[$name];
                $this->_domainCache[$name] = new $class($this->getApiClient());
            }

            return $this->_domainCache[$name];
        }

        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }

        throw new XFApiException('Unable to find domain ' . $name);
    }
}