<?php

namespace XFApi\Dto\DBTech\eCommerce;

use XFApi\Dto\AbstractItemDto;

/**
 * Class ProductDto
 * @package XFApi\Dto\DBTech\eCommerce
 *
 * @property-read integer product_id
 * @property-read integer branding_free
 * @property-read boolean can_download
 * @property-read boolean can_edit
 * @property-read boolean can_edit_icon
 * @property-read boolean can_edit_tags
 * @property-read boolean can_hard_delete
 * @property-read boolean can_react
 * @property-read boolean can_soft_delete
 * @property-read boolean can_view_product_images
 * @property-read string copyright_info
 * @property-read integer creation_date
 * @property-read string description_full
 * @property-read integer download_count
 * @property-read integer full_download_count
 * @property-read string full_title
 * @property-read integer global_branding_free
 * @property-read boolean has_demo
 * @property-read string|null icon_url
 * @property-read boolean is_discountable
 * @property-read boolean is_paid
 * @property-read boolean is_watching
 * @property-read integer last_update
 * @property-read integer license_count
 * @property-read string license_prefix
 * @property-read integer parent_product_id
 * @property-read integer prefix_id
 * @property-read integer product_category_id
 * @property-read array product_fields
 * @property-read string product_page_url
 * @property-read string product_specification
 * @property-read string product_state
 * @property-read string product_type
 * @property-read array product_versions
 * @property-read integer rating_avg
 * @property-read integer rating_count
 * @property-read integer rating_weighted
 * @property-read integer reaction_score
 * @property-read integer release_count
 * @property-read array requirements
 * @property-read integer review_count
 * @property-read string tagline
 * @property-read array tags
 * @property-read string title
 * @property-read array User
 * @property-read integer user_id
 * @property-read string username
 * @property-read string warning_message
 *
 * @property-read DownloadDto LatestVersion
 * @property-read CategoryDto Category
 */
class ProductDto extends AbstractItemDto
{

}
