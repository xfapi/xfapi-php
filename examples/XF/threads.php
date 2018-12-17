<?php

require_once '../lib.php';

$threadsApi = $client->xf->thread;

$threads = $threadsApi->getThreads();
$thread = $threadsApi->getThread(1);
$posts = $threadsApi->getThreadPosts(1);
$newThread = $threadsApi->create(2, 'Thread title', 'Contents of message..');
