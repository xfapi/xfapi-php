<?php

namespace XFApi\Container;

use XFApi\Domain\XF\AuthDomain;
use XFApi\Domain\XF\IndexDomain;
use XFApi\Domain\XF\ThreadDomain;
use XFApi\Domain\XF\PostDomain;
use XFApi\Domain\XF\NodeDomain;
use XFApi\Domain\XF\UserDomain;
use XFApi\Domain\XF\MeDomain;

/**
 * Class XF
 * @package XFApi\Container
 *
 * @property-read IndexDomain $index
 * @property-read ThreadDomain $thread
 * @property-read PostDomain $post
 * @property-read AuthDomain $auth
 * @property-read NodeDomain $node
 * @property-read UserDomain $user
 * @property-read MeDomain $me
 */
class XFContainer extends AbstractContainer
{
    protected $_domains = [
        'index' => IndexDomain::class,
        'thread' => ThreadDomain::class,
        'post' => PostDomain::class,
        'auth' => AuthDomain::class,
        'node' => NodeDomain::class,
        'user' => UserDomain::class,
        'me' => MeDomain::class,
    ];
}
