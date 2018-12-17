<?php

require_once '../lib.php';

$resourcesApi = $client->xfrm->resource;

$resources = $resourcesApi->getResources();
