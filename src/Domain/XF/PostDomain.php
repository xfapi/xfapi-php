<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\PostDto;
use XFApi\Dto\XF\PostsDto;

class PostDomain extends AbstractDomain
{
    protected function getUri($uri = null, array $params = [])
    {
    }

    protected function getDtoClass()
    {
        return ThreadDto::class;
    }
}
