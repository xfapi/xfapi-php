<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\UserDto;

class AuthDomain extends AbstractDomain
{
    protected function getUri($uri = null, array $params = [])
    {
        $return = 'auth';
        if (isset($params['user_id'])) {
            $return .= '/' . $params['user_id'];
        }

        if (!empty($uri)) {
            $return .= '/' . $uri;
        }

        return $return;
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

    public function fromSession($rememberCookie, $sessionId)
    {
        $uri = $this->getUri('from-session');

        $user = $this->post($uri, [], ['remember_cookie' => $rememberCookie]);
        if (!empty($user['user'])) {
            return $this->getDto(UserDto::class, $user['user']);
        }

        $user = $this->post($uri, [], ['session_id' => $sessionId]);
        if (!empty($user['user'])) {
            return $this->getDto(UserDto::class, $user['user']);
        }

        return null;
    }

    protected function getDtoClass()
    {
        return UserDto::class;
    }
}