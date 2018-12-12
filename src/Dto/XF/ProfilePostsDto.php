<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractPaginatedDto;

/**
 * Class ProfilePostsDto
 * @package XFApi\Dto\XF
 *
 * @property-read ProfilePostDto[] $profile_posts
 */
class ProfilePostsDto extends AbstractPaginatedDto
{
    protected function getItemDtoClass()
    {
        return ProfilePostDto::class;
    }

    protected function getItemsKey()
    {
        return 'profile_posts';
    }
}