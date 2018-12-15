<?php

use PHPUnit\Framework\TestCase;

abstract class AbstractTest extends TestCase
{
    protected $client;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $config = include './config.php';
        $this->client = new \XFApi\Client($config['xfApiUrl'], $config['xfApiKey']);
    }

    protected function endpoint($endpoint, $namespace = 'xf') {
        return $this->client->$namespace->$endpoint;
    }
}