<?php

$dir = __DIR__;
require_once $dir . '/../../lib.php';

$categoryApi = $client->dbtech_ecommerce->category;

$categories = $categoryApi->getCategories();

$category = $categoryApi->getCategory(5);
