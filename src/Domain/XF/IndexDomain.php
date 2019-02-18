<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\IndexDto;

class IndexDomain extends AbstractDomain
{
    protected function getUri($uri = null, array $params = [])
    {
    }

    protected function getDtoClass()
    {
        return IndexDto::class;
    }
}
