<?php

namespace XFApi\Domain\DBTech\eCommerce;

use XFApi\Dto\DBTech\eCommerce\DownloadDto;
use XFApi\Dto\DBTech\eCommerce\DownloadsDto;

class DownloadDomain extends AbstracteCommerceDomain
{
    /**
     * @param int $page
     *
     * @return \XFApi\Dto\AbstractPaginatedDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getDownloads($page = 1)
    {
        $uri = $this->getUri('');
        $downloads = $this->get($uri, ['page' => $page]);
        
        return $this->getPaginatedDto(DownloadsDto::class, $downloads['downloads'], $downloads['pagination']);
    }
    
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
        
        if (!empty($uri)) {
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
