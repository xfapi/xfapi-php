<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractPaginatedDto;

/**
 * Class ProductsDto
 * @package XFApi\Dto\XF
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