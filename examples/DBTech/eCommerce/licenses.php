<?php

$dir = __DIR__;
require_once $dir . '/../../lib.php';

$licenseApi = $client->dbtech_ecommerce->license;

$licenses = $licenseApi->getLicenses(['category_ids' => [5], 'platforms' => ['xf21']]);

$license = $licenseApi->getLicense('L-XFMEMBERMAP-1AZRNI2GJY0');