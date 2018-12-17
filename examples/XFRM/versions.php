<?php

require_once '../lib.php';

$versionApi = $client->xfrm->version;

$version = $versionApi->getVersion(1);
