<?php

require_once './lib.php';

$productsApi = $client->dbtech_ecommerce->product;

$products = $productsApi->getProducts();
$product = $productsApi->getProduct(1);
