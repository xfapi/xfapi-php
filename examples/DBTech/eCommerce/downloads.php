<?php

$dir = __DIR__;
require_once $dir . '/../../lib.php';

$downloadApi = $client->dbtech_ecommerce->download;

$downloads = $downloadApi->getDownloads();

$download = $downloadApi->getDownload(1773);