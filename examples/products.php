<?php

require_once './lib.php';

/** @var \XFApi\Domain\XF\ProductDomain $productsApi */
$productsApi = $client->xf->product;

$products = $productsApi->getProducts();
$product = $productsApi->getProduct(1);