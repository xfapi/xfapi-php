<?php

namespace XFApi\Container;

use XFApi\Domain\XFRM\ResourceCategoryDomain;
use XFApi\Domain\XFRM\ResourceDomain;
use XFApi\Domain\XFRM\ResourceReviewDomain;
use XFApi\Domain\XFRM\ResourceUpdateDomain;
use XFApi\Domain\XFRM\ResourceVersionDomain;

/**
 * Class XF
 * @package XFApi\Container
 *
 * @property-read ResourceDomain $resource
 * @property-read ResourceCategoryDomain $category
 * @property-read ResourceReviewDomain $review
 * @property-read ResourceUpdateDomain $update
 * @property-read ResourceVersionDomain $version
 */
class XFRMContainer extends AbstractContainer
{
    protected $_domains = [
        'review' => ResourceReviewDomain::class,
        'update' => ResourceUpdateDomain::class,
        'category' => ResourceCategoryDomain::class,
        'resource' => ResourceDomain::class,
        'version' => ResourceVersionDomain::class
    ];
}
