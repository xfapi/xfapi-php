<?php

namespace XFApi\Dto\DBTech\eCommerce;

use XFApi\Dto\AbstractPaginatedDto;

/**
 * Class ProductsDto
 * @package XFApi\Dto\DBTech\eCommerce
 *
 * @property-read ProductDto[] $threads
 */
class ProductsDto extends AbstractPaginatedDto
{
    /**
     * @return string
     */
    protected function getItemDtoClass()
    {
        return ProductDto::class;
    }
    
    /**
     * @return string
     */
    protected function getItemsKey()
    {
        return 'products';
    }
}
