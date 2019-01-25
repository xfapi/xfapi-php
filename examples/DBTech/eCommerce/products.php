<?php

require_once '../../lib.php';

$productsApi = $client->dbtech_ecommerce->product;

$products = $productsApi->getProducts();

$product = $productsApi->getProduct(364);

$latestVersion = $productsApi->getLatestVersion(364, 'xf21', 'full');

$purchases = $productsApi->getPurchases(['category_ids' => [5], 'platforms' => ['xf21']]);