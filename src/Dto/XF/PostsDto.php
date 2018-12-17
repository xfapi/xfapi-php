<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractPaginatedDto;

/**
 * Class PostsDto
 * @package XFApi\Dto\XF
 *
 * @property-read PostDto[] $posts
 */
class PostsDto extends AbstractPaginatedDto
{
    protected function getItemDtoClass()
    {
        return PostDto::class;
    }

    protected function getItemsKey()
    {
        return 'posts';
    }
}
