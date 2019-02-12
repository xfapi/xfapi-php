<?php

namespace XFApi\Domain\DBTech\eCommerce;

use XFApi\Dto\DBTech\eCommerce\DownloadDto;
use XFApi\Dto\DBTech\eCommerce\DownloadsDto;
use XFApi\Dto\DBTech\eCommerce\ProductDto;
use XFApi\Dto\DBTech\eCommerce\ProductsDto;

/**
 * Class ProductDomain
 *
 * @package XFApi\Domain\DBTech\eCommerce
 */
class ProductDomain extends AbstracteCommerceDomain
{
    /**
     * @param int $page
     *
     * @return \XFApi\Dto\AbstractPaginatedDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getProducts($page = 1)
    {
        $uri = $this->getUri('');
        $products = $this->get($uri, ['page' => $page]);

        return $this->getPaginatedDto(ProductsDto::class, $products['products'], $products['pagination']);
    }
    
    /**
     * @param $productId
     *
     * @return \XFApi\Dto\AbstractItemDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getProduct($productId)
    {
        $uri = $this->getUri(null, ['product_id' => $productId]);
        $product = $this->get($uri);
        return $this->getDto(ProductDto::class, $product['product']);
    }
    
    /**
     * @param $productId
     * @param string $productVersion
     * @param string $productVersionType
     *
     * @return \XFApi\Dto\AbstractItemDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getLatestVersion($productId, $productVersion = '', $productVersionType = '')
    {
        $uri = $this->getUri('latest-version', ['product_id' => $productId]);
        $latestVersion = $this->get($uri, [
            'product_version' => $productVersion,
            'product_version_type' => $productVersionType
        ]);
        return $this->getDto(DownloadDto::class, $latestVersion['latestVersion']);
    }
    
    /**
     * @param array $categoryIds
     * @param array $platforms
     *
     * @return \XFApi\Dto\AbstractItemDto[]
     * @throws \XFApi\Exception\XFApiException
     */
    public function getPurchases($categoryIds = [], $platforms = [])
    {
        $uri = $this->getUri('purchased');
        $products = $this->get($uri, ['category_ids' => $categoryIds, 'platforms' => $platforms]);
        
        return $this->getDtos(ProductDto::class, $products['products']);
    }
    
    /**
     * @param integer $productId
     * @param string $productVersion
     * @param string $productVersionType
     * @param integer $page
     *
     * @return \XFApi\Dto\AbstractPaginatedDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getDownloads($productId, $productVersion = '', $productVersionType = '', $page = 1)
    {
        $uri = $this->getUri('downloads', [
            'product_id' => $productId,
            'product_version' => $productVersion,
            'product_version_type' => $productVersionType
        ]);
        $downloads = $this->get($uri, ['page' => $page]);
        
        return $this->getPaginatedDto(DownloadsDto::class, $downloads['downloads'], $downloads['pagination']);
    }
    
    /**
     * @param null $uri
     * @param array $params
     *
     * @return string
     */
    protected function getUri($uri = null, array $params = [])
    {
        $return = 'dbtech-ecommerce';
        if (isset($params['product_id'])) {
            $return .= '/' . $params['product_id'];
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
        return ProductDto::class;
    }
}
