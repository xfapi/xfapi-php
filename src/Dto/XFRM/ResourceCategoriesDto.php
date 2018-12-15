<?php

namespace XFApi\Dto\XFRM;

use XFApi\Dto\AbstractTreeDto;

/**
 * Class ResourceCategoriesDto
 * @package XFApi\Dto\XFRM
 *
 * @property-read ResourceCategoryDto[] $categories
 */
class ResourceCategoriesDto extends AbstractTreeDto
{
    protected function getItemDtoClass()
    {
        return ResourceCategoryDto::class;
    }

    protected function getItemsKey()
    {
        return 'categories';
    }
}