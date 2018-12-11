<?php

require_once './lib.php';

$threadsApi = $client->thread;

$thread = $threadsApi->get(1);
