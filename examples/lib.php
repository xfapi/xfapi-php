<?php
require_once './config.php';
require_once '../vendor/autoload.php';

$client = new \XFApi\Client($config['xfApiUrl'], $config['xfApiKey']);