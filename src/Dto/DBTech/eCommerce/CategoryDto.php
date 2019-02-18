<?php

namespace XFApi\Dto\DBTech\eCommerce;

use XFApi\Dto\AbstractItemDto;

/**
 * Class ResourceCategoryDto
 * @package XFApi\Dto\DBTech\eCommerce
 *
 * @property-read integer category_id
 * @property-read string title
 * @property-read string description
 * @property-read integer product_count
 * @property-read integer last_update
 * @property-read string last_product_title
 * @property-read integer last_product_id
 * @property-read integer min_tags
 *
 * @property-read array prefixes
 * @property-read array product_fields
 *
 * @property-read boolean can_add
 * @property-read boolean can_upload_images
 */
class CategoryDto extends AbstractItemDto
{

}
