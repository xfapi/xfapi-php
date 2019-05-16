<?php

namespace XFApi\Dto\DBTech\eCommerce;

use XFApi\Dto\AbstractItemDto;
use XFApi\Dto\XF\UserDto;

/**
 * Class DownloadDto
 * @package XFApi\Dto\DBTech\eCommerce
 *
 * @property-read integer download_id
 * @property-read integer product_id
 * @property-read string download_state
 * @property-read string version_string
 * @property-read integer release_date
 * @property-read string change_log
 * @property-read boolean has_new_features
 * @property-read boolean has_changed_features
 * @property-read boolean has_bug_fixes
 * @property-read boolean is_unstable
 * @property-read string release_notes
 * @property-read string download_type
 * @property-read integer download_count
 * @property-read integer full_download_count
 * @property-read integer attach_count
 * @property-read string warning_message
 *
 * @property-read ProductDto Product
 * @property-read array Attachments
 *
 * @property-read boolean can_edit
 * @property-read boolean can_soft_delete
 * @property-read boolean can_hard_delete
 * @property-read boolean can_react
 * @property-read boolean can_download
 */
class DownloadDto extends AbstractItemDto
{
    protected $_relations = [
        'Product' => ProductDto::class,
//        'Versions' => DownloadVersionsDto::class
    ];
}
