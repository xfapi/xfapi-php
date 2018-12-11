<?php

require_once './lib.php';

$threadsApi = $client->xf->thread;

$thread = $threadsApi->get(1);
dump($thread);