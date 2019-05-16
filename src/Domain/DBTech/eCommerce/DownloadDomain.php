<?php

namespace XFApi\Domain\DBTech\eCommerce;

use XFApi\Dto\DBTech\eCommerce\DownloadDto;
use XFApi\Dto\DBTech\eCommerce\DownloadsDto;

class DownloadDomain extends AbstracteCommerceDomain
{
    /**
     * @param $downloadId
     *
     * @return \XFApi\Dto\AbstractItemDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getDownload($downloadId)
    {
        $uri = $this->getUri(null, ['download_id' => $downloadId]);
        $download = $this->get($uri);
        return $this->getDto(DownloadDto::class, $download['download']);
    }
    
    /**
     * @param integer $downloadId
     * @param string $productVersion
     * @param string $productVersionType
     * @param string $saveTo
     *
     * @return array
     * @throws \XFApi\Exception\XFApiException
     */
    public function downloadFile($downloadId, $productVersion, $productVersionType, $saveTo)
    {
        $uri = $this->getUri('download', ['download_id' => $downloadId]);
        $this->get($uri, [
            'product_version' => $productVersion,
            'product_version_type' => $productVersionType],
            [],
            $saveTo
        );
        return ['success' => true];
    }
    
    /**
     * @param null $uri
     * @param array $params
     *
     * @return string
     */
    protected function getUri($uri = null, array $params = [])
    {
        $return = 'dbtech-ecommerce/downloads';
        if (isset($params['download_id'])) {
            $return .= '/' . $params['download_id'];
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
        return DownloadDto::class;
    }
}
