<?php

require_once './lib.php';

$threadsApi = $client->xf->thread;

$threads = $threadsApi->getThreads();
$thread = $threadsApi->getThread(1);
