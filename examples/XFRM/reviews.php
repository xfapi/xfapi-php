<?php

require_once '../lib.php';

$reviewsApi = $client->xfrm->review;

$reviews = $reviewsApi->getReviews();

$review = $reviewsApi->getReview(1);
