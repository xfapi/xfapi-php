<?php

require_once '../../lib.php';

$categoryApi = $client->dbtech_ecommerce->category;

$categories = $categoryApi->getCategories();

$category = $categoryApi->getCategory(1);
