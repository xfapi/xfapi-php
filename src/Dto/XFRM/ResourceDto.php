<?php

namespace XFApi\Dto\XFRM;

use XFApi\Dto\AbstractItemDto;
use XFApi\Dto\XF\UserDto;

/**
 * Class ResourceDto
 * @package XFApi\Dto\XFRM
 *
 * @property-read integer resource_id
 * @property-read string title
 * @property-read string tag_line
 * @property-read integer user_id
 * @property-read string resource_state
 * @property-read integer resource_date
 * @property-read integer resource_category_id
 * @property-read string external_url
 * @property-read float price
 * @property-read string currency
 * @property-read integer download_count
 * @property-read integer rating_count
 * @property-read integer rating_sum
 * @property-read float rating_avg
 * @property-read float rating_weighted
 * @property-read integer last_update
 * @property-read string alt_support_url
 * @property-read integer prefix_id
 *
 * @property-read ResourceCategoryDto Category
 * @property-read UserDto User
 *
 * @property-read string description
 * @property-read integer description_attach_count
 * @property-read integer reaction_score
 * @property-read integer update_count
 * @property-read integer review_count
 * @property-read string current_download_url
 * @property-read array current_files
 * @property-read string external_purchase_url
 * @property-read boolean is_watching
 * @property-read string icon_url
 * @property-read string version
 * @property-read array custom_fields
 * @property-read array tags
 * @property-read string prefix
 *
 * @property-read boolean can_edit
 * @property-read boolean can_edit_tags
 * @property-read boolean can_edit_icon
 * @property-read boolean can_soft_delete
 * @property-read boolean can_hard_delete
 * @property-read boolean can_download
 * @property-read boolean can_view_description_attachments
 */
class ResourceDto extends AbstractItemDto
{
    protected $_relations = [
        'Category' => ResourceCategoryDto::class,
        'User' => UserDto::class
    ];
}
