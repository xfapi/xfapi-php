<?php

namespace XFApi\Dto\DBTech\eCommerce;

use XFApi\Dto\AbstractItemDto;

/**
 * Class LicenseDto
 * @package XFApi\Dto\DBTech\eCommerce
 *
 * @property-read string license_key
 * @property-read integer product_id
 * @property-read integer user_id
 * @property-read string username
 * @property-read integer purchase_date
 * @property-read integer expiry_date
 * @property-read integer latest_download_id
 * @property-read string license_state
 *
 * @property-read array license_fields
 *
 * @property-read ProductDto Product
 */
class LicenseDto extends AbstractItemDto
{

}
