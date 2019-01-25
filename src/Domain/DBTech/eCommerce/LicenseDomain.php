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
     * @param $licenseKey
     *
     * @return \XFApi\Dto\AbstractItemDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getLicense($licenseKey)
    {
        $uri = $this->getUri(null, ['license_key' => $licenseKey]);
        $license = $this->get($uri);
        return $this->getDto(LicenseDto::class, $license['license']);
    }
    
    /**
     * @param null $uri
     * @param array $params
     *
     * @return string
     */
    protected function getUri($uri = null, array $params = [])
    {
        $return = 'dbtech-ecommerce/licenses';
        if (isset($params['license_key'])) {
            $return .= '/' . $params['license_key'];
        }
    
        if ($uri !== null) {
            $return .= '/' . $uri;
        }
    
        return $return;
    }
    
    /**
     * @return string
     */
    protected function getDtoClass()
    {
        return LicenseDto::class;
    }
}
