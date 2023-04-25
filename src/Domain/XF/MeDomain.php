<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\UserDto;

class MeDomain extends AbstractDomain
{
    protected function getUri($uri = null, array $params = [])
    {
        $return = 'me';
        if (isset($params['user_id'])) {
            $return .= '/' . $params['user_id'];
        }

        if (!empty($uri)) {
            $return .= '/' . $uri;
        }

        return $return;
    }

    public function me()
    {
        $uri = $this->getUri();

        $user = $this->get($uri, ['api_bypass_permissions' => 1]);
        if (!empty($user['me'])) {
            return $this->getDto(UserDto::class, $user['me']);
        }

        return null;
    }

    protected function getDtoClass()
    {
        return UserDto::class;
    }
}