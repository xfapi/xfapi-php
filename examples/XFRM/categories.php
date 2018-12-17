<?php

require_once '../lib.php';

$categoryApi = $client->xfrm->category;

$categories = $categoryApi->getCategories();

$category = $categoryApi->getCategory(1);