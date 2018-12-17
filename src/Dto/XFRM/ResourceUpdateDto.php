<?php

namespace XFApi\Dto\XFRM;

use XFApi\Dto\AbstractItemDto;
use XFApi\Dto\XF\UserDto;

/**
 * Class ResourceUpdateDto
 * @package XFApi\Dto\XFRM
 *
 * @property-read integer resource_update_id
 * @property-read integer resource_id
 * @property-read string title
 * @property-read string message
 * @property-read string message_state
 * @property-read integer attach_count
 * @property-read string warning_message
 *
 * @property-read ResourceDto Resource
 * @property-read array Attachments
 *
 * @property-read boolean can_edit
 * @property-read boolean can_soft_delete
 * @property-read boolean can_hard_delete
 * @property-read boolean can_react
 * @property-read boolean can_view_attachments
 */
class ResourceUpdateDto extends AbstractItemDto
{
    protected $_relations = [
        'Resource' => ResourceDto::class
    ];
}
