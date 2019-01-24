<?php

namespace XFApi\Dto\DBTech\eCommerce;

use XFApi\Dto\AbstractPaginatedDto;

/**
 * Class DownloadsDto
 * @package XFApi\Dto\DBTech\eCommerce
 *
 * @property-read DownloadDto[] $downloads
 */
class DownloadsDto extends AbstractPaginatedDto
{
    /**
     * @return string
     */
    protected function getItemDtoClass()
    {
        return DownloadDto::class;
    }
    
    /**
     * @return string
     */
    protected function getItemsKey()
    {
        return 'downloads';
    }
}
