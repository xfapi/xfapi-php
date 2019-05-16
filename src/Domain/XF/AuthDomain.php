<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\UserDto;

class AuthDomain extends AbstractDomain
{
    protected function getUri($uri = null, array $params = [])
    {
        return 'auth';
    }

    /**
     * @param string $login
     * @param string $password
     * @param null|string $ip
     *
     * @return \XFApi\Dto\AbstractItemDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function auth($login, $password, $ip = null)
    {
        $uri = $this->getUri();
        $user = $this->post($uri, [], ['login' => $login, 'password' => $password, 'limit_ip' => $ip]);
        return empty($user['user']) ? null : $this->getDto(UserDto::class, $user['user']);
    }

    protected function getDtoClass()
    {
        return UserDto::class;
    }
}