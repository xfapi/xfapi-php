<?php

namespace XFApi\Dto\XFRM;

use XFApi\Dto\AbstractPaginatedDto;

/**
 * Class ResourceReviewsDto
 * @package XFApi\Dto\XFRM
 *
 * @property-read ResourceReviewDto[] $reviews
 */
class ResourceReviewsDto extends AbstractPaginatedDto
{
    protected function getItemDtoClass()
    {
        return ResourceReviewDto::class;
    }

    protected function getItemsKey()
    {
        return 'reviews';
    }
}
