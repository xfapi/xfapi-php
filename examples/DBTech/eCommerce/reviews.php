<?php

require_once '../../lib.php';

$reviewsApi = $client->dbtech_ecommerce->review;

$reviews = $reviewsApi->getReviews();

$review = $reviewsApi->getReview(1);
