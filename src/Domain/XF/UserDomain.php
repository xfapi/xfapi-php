<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\UserDto;
use XFApi\Dto\XF\UsersDto;

class UserDomain extends AbstractDomain
{
    public function getUsersByUsername($username)
    {
        $uri = $this->getUri('findName');
        $users = $this->get($uri, ['username' => $username]);

        $userResults = $users['recommendations'];
        if ($users['exact']) {
            array_unshift($userResults, $users['exact']);
        }

        return $this->getTreeDto(UsersDto::class, $userResults, []);
    }

    protected function getUri($uri = null, array $params = [])
    {
        $return = 'users';
        if (isset($params['user_id'])) {
            $return .= '/' . $params['user_id'];
        }

        if (!empty($uri)) {
            $return .= '/' . $uri;
        }

        return $return;
    }

    protected function getDtoClass()
    {
        return UsersDto::class;
    }
}
