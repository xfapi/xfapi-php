<?php

namespace XFApi\Container\DBTech;

use XFApi\Container\AbstractContainer;
use XFApi\Domain\DBTech\eCommerce\ProductDomain;
use XFApi\Domain\DBTech\eCommerce\CategoryDomain;
use XFApi\Domain\DBTech\eCommerce\ProductReviewDomain;
use XFApi\Domain\DBTech\eCommerce\DownloadDomain;
use XFApi\Domain\DBTech\eCommerce\LicenseDomain;

/**
 * Class XF
 * @package XFApi\Container
 *
 * @property-read ProductDomain $product
 * @property-read CategoryDomain $category
 * @property-read ProductReviewDomain $review
 * @property-read DownloadDomain $download
 * @property-read LicenseDomain $license
 */
class ECommerceContainer extends AbstractContainer
{
    protected $_domains = [
        'review' => ProductReviewDomain::class,
        'download' => DownloadDomain::class,
        'category' => CategoryDomain::class,
        'product' => ProductDomain::class,
        'license' => LicenseDomain::class
    ];
}
