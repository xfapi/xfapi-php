<?php

namespace XFApi\Dto\DBTech\eCommerce;

use XFApi\Dto\AbstractPaginatedDto;

/**
 * Class ProductReviewsDto
 * @package XFApi\Dto\DBTech\eCommerce
 *
 * @property-read ProductReviewDto[] $reviews
 */
class ProductReviewsDto extends AbstractPaginatedDto
{
    /**
     * @return string
     */
    protected function getItemDtoClass()
    {
        return ProductReviewDto::class;
    }
    
    /**
     * @return string
     */
    protected function getItemsKey()
    {
        return 'reviews';
    }
}
