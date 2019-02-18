<?php

namespace XFApi\Dto\DBTech\eCommerce;

use XFApi\Dto\AbstractTreeDto;

/**
 * Class ResourceCategoriesDto
 * @package XFApi\Dto\DBTech\eCommerce
 *
 * @property-read CategoryDto[] $categories
 */
class CategoriesDto extends AbstractTreeDto
{
    /**
     * @return string
     */
    protected function getItemDtoClass()
    {
        return CategoryDto::class;
    }
    
    /**
     * @return string
     */
    protected function getItemsKey()
    {
        return 'categories';
    }
}
