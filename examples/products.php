<?php

require_once './lib.php';

$productsApi = $client->xf->product;

$products = $productsApi->getProducts();
$product = $productsApi->getProduct(1);