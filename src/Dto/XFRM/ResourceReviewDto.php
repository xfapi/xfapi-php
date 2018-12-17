<?php

namespace XFApi\Dto\XFRM;

use XFApi\Dto\AbstractItemDto;
use XFApi\Dto\XF\UserDto;

/**
 * Class ResourceReviewDto
 * @package XFApi\Dto\XFRM
 *
 * @property-read integer resource_rating_id
 * @property-read integer resource_id
 * @property-read integer resource_version_id
 * @property-read integer rating
 * @property-read integer rating_date
 * @property-read string message
 * @property-read string version_string
 * @property-read string author_response
 * @property-read string rating_state
 * @property-read boolean is_anonymous
 *
 * @property-read ResourceDto Resource
 * @property-read integer user_id
 * @property-read UserDto User
 * @property-read integer anonymous_user_id
 * @property-read UserDto AnonymousUser
 *
 * @property-read boolean can_soft_delete
 * @property-read boolean can_hard_delete
 * @property-read boolean can_author_reply
 */
class ResourceReviewDto extends AbstractItemDto
{
    protected $_resource;

    protected $_relations = [
        'Resource' => ResourceDto::class,
        'User' => UserDto::class,
        'AnonymousUser' => UserDto::class
    ];

    public function getResource()
    {
        if(!$this->_resource) {
            $this->_resource = new ResourceDto($this->_attributes['Resource']);
        }

        return $this->_resource;
    }
}