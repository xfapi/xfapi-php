<?php

require_once '../lib.php';

$licenseApi = $client->dbtech_ecommerce->license;

$licenses = $licenseApi->getLicenses();

$license = $licenseApi->getLicense(1);
