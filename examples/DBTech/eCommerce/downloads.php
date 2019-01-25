<?php

$dir = __DIR__;
require_once $dir . '/../../lib.php';

$downloadApi = $client->dbtech_ecommerce->download;

$download = $downloadApi->getDownload(1773);