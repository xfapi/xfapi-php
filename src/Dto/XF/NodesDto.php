<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractTreeDto;

/**
 * Class NodesDto
 * @package XFApi\Dto\XF
 */
class NodesDto extends AbstractTreeDto
{
    protected function getItemDtoClass()
    {
        return NodeDto::class;
    }

    protected function getItemsKey()
    {
        return 'nodes';
    }
}
