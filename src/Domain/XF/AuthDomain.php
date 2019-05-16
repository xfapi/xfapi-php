<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\UserDto;

class AuthDomain extends AbstractDomain
{
    protected function getUri($uri = null, array $params = [])
    {
        $return = 'auth';

        return $return;
    }

    protected function getDtoClass()
    {
        return UserDto::class;
    }
}