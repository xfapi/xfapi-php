<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractTreeDto;

/**
 * Class UsersDto
 * @package XFApi\Dto\XF
 *
 * @property-read UserDto[] $users
 */
class UsersDto extends AbstractTreeDto
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
