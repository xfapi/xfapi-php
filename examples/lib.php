<?php

$dir = __DIR__;
require_once "{$dir}/config.php";
require_once "{$dir}/../vendor/autoload.php";

$client = new \XFApi\Client($config['xfApiUrl'], $config['xfApiKey']);