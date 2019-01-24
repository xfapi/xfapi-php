<?php

namespace XFApi\Domain\DBTech\eCommerce;

use XFApi\Dto\DBTech\eCommerce\LicenseDto;
use XFApi\Dto\DBTech\eCommerce\LicensesDto;

class LicenseDomain extends AbstracteCommerceDomain
{
    /**
     * @param array $categoryIds
     * @param array $platforms
     * @param int $page
     *
     * @return \XFApi\Dto\AbstractPaginatedDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getLicenses($categoryIds = [], $platforms = [], $page = 1)
    {
        $uri = $this->getUri('');
        $licenses = $this->get($uri, ['category_ids' => $categoryIds, 'platforms' => $platforms, 'page' => $page]);
        
        return $this->getPaginatedDto(LicensesDto::class, $licenses['licenses'], $licenses['pagination']);
    }
    
    /**
     * @param null $uri
     * @param array $params
     *
     * @return string
     */
    protected function getUri($uri = null, array $params = [])
    {
        return 'dbtech-ecommerce/licenses';
    }
    
    /**
     * @return string
     */
    protected function getDtoClass()
    {
        return LicenseDto::class;
    }
}
