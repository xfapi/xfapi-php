<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractPaginatedDto;

/**
 * Class UsersDto
 * @package XFApi\Dto\XF
 *
 * @property-read UserDto[] $users
 */
class UsersDto extends AbstractPaginatedDto
{
    protected function getItemDtoClass()
    {
        return UserDto::class;
    }

    protected function getItemsKey()
    {
        return 'users';
    }
}
