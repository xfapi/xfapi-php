<?php

namespace XFApi\Container\Audentio;

use XFApi\Container\AbstractContainer;
use XFApi\Domain\Audentio\WpConnect\ThreadDomain;

/**
 * Class WpConnectContainer
 * @package XFApi\Container
 *
 * @property-read ThreadDomain $thread
 */
class WpConnectContainer extends AbstractContainer
{
    protected $_domains = [
        'thread' => ThreadDomain::class,
    ];
}
