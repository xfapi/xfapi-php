<?php

require_once '../../lib.php';

$downloadApi = $client->dbtech_ecommerce->download;

$downloads = $downloadApi->getDownloads();

$download = $downloadApi->getDownload(1);