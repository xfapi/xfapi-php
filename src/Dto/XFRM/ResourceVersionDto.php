<?php

namespace XFApi\Dto\XFRM;

use XFApi\Dto\AbstractItemDto;
use XFApi\Dto\XF\UserDto;

/**
 * Class ResourceVersionsDto
 * @package XFApi\Dto\XFRM
 *
 * @property-read integer resource_version_id
 * @property-read integer resource_id
 * @property-read string version_string
 * @property-read integer release_date
 * @property-read integer download_count
 * @property-read integer rating_count
 * @property-read string version_state
 *
 * @property-read ResourceDto Resource
 * @property-read string download_url
 * @property-read array files
 * @property-read float rating_avg
 *
 * @property-read boolean can_download
 * @property-read boolean can_soft_delete
 * @property-read boolean can_hard_delete
 */
class ResourceVersionDto extends AbstractItemDto
{
    protected $_relations = [
        'Resource' => ResourceDto::class
    ];
}
