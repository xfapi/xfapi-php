<?php

namespace XFApi\Dto\XFRM;

use XFApi\Dto\AbstractItemDto;

/**
 * Class ResourceCategoryDto
 * @package XFApi\Dto\XFRM
 *
 * @property-read integer resource_category_id
 * @property-read string title
 * @property-read string description
 * @property-read integer resource_count
 * @property-read integer last_update
 * @property-read integer last_resource_id
 * @property-read boolean allow_local
 * @property-read boolean allow_external
 * @property-read boolean allow_commercial_external
 * @property-read boolean allow_fileless
 * @property-read integer min_tags
 * @property-read boolean enable_versioning
 *
 * @property-read array prefixes
 * @property-read array custom_fields
 *
 * @property-read boolean can_add
 * @property-read boolean can_upload_images
 */
class ResourceCategoryDto extends AbstractItemDto
{

}