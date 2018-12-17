<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractPaginatedDto;

/**
 * Class ThreadsDto
 * @package XFApi\Dto\XF
 *
 * @property-read ThreadDto[] $threads
 */
class ThreadsDto extends AbstractPaginatedDto
{
    protected function getItemDtoClass()
    {
        return ThreadDto::class;
    }

    protected function getItemsKey()
    {
        return 'threads';
    }
}
