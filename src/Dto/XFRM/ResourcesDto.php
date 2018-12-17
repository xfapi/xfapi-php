<?php

namespace XFApi\Dto\XFRM;

use XFApi\Dto\AbstractPaginatedDto;

/**
 * Class ResourcesDto
 * @package XFApi\Dto\XFRM
 *
 * @property-read ResourceDto[] $resources
 */
class ResourcesDto extends AbstractPaginatedDto
{
    protected function getItemDtoClass()
    {
        return ResourceDto::class;
    }

    protected function getItemsKey()
    {
        return 'resources';
    }
}