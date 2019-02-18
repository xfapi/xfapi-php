<?php

namespace XFApi\Dto\DBTech\eCommerce;

use XFApi\Dto\AbstractPaginatedDto;

/**
 * Class LicensesDto
 * @package XFApi\Dto\DBTech\eCommerce
 *
 * @property-read LicenseDto[] $threads
 */
class LicensesDto extends AbstractPaginatedDto
{
    /**
     * @return string
     */
    protected function getItemDtoClass()
    {
        return LicenseDto::class;
    }
    
    /**
     * @return string
     */
    protected function getItemsKey()
    {
        return 'licenses';
    }
}
