<?php

$dir = __DIR__;
require_once $dir . '/../../lib.php';

$reviewsApi = $client->dbtech_ecommerce->review;

$reviews = $reviewsApi->getReviews();

$review = $reviewsApi->getReview(5);
