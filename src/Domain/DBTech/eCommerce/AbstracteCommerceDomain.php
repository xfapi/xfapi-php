<?php

namespace XFApi\Domain\DBTech\eCommerce;

use XFApi\Domain\AbstractDomain;

/**
 * Class AbstracteCommerceDomain
 *
 * @package XFApi\Domain\DBTech\eCommerce
 */
abstract class AbstracteCommerceDomain extends AbstractDomain
{
    
    /**
     * @param $endpoint
     * @param array $params
     * @param array $headers
     * @param string|null $saveTo
     *
     * @return array
     *
     * @throws \XFApi\Exception\XFApiException
     */
    public function get($endpoint, array $params = [], array $headers = [], $saveTo = null)
    {
        $boardUrl = 'https://www.dragonbyte-tech.com';
        $versionId = 0;
        
        if (class_exists('XF', false)) {
            /** @noinspection PhpUndefinedClassInspection */
            $boardUrl = \XF::options()->boardUrl;
            /** @noinspection PhpUndefinedClassInspection */
            $versionId = \XF::$versionId;
        }
        
        $headers = array_replace([
            'X-DragonByte-BoardUrl' => $boardUrl,
            'X-DragonByte-HttpHost' => !empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'N/A',
            'X-DragonByte-Software' => 'XenForo',
            'X-DragonByte-SoftwareVersion' => $versionId
        ], $headers);
        
        return parent::get($endpoint, $params, $headers, $saveTo);
    }
}
