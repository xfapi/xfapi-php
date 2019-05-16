<?php

namespace XFApi\Container;

use XFApi\Domain\XF\AuthDomain;
use XFApi\Domain\XF\IndexDomain;
use XFApi\Domain\XF\ThreadDomain;
use XFApi\Domain\XF\PostDomain;

/**
 * Class XF
 * @package XFApi\Container
 *
 * @property-read IndexDomain $index
 * @property-read ThreadDomain $thread
 * @property-read PostDomain $post
 */
class XFContainer extends AbstractContainer
{
    protected $_domains = [
        'index' => IndexDomain::class,
        'thread' => ThreadDomain::class,
        'post' => PostDomain::class,
        'auth' => AuthDomain::class
    ];
}
