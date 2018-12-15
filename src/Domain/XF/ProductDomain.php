<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\ProductDto;
use XFApi\Dto\XF\ProductsDto;

/**
 * Class ProductDomain
 *
 * @package XFApi\Domain\XF
 */
class ProductDomain extends AbstractDomain
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
		$products = $this->requestGet($uri, ['page' => $page]);

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
		$product = $this->requestGet($uri);
		return $this->getDto(ProductDto::class, $product['product']);
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
		if (isset($params['product_id']))
		{
			$return .= '/' . $params['product_id'];
		}

		if (!empty($uri))
		{
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
	
	/**
	 * @param $endpoint
	 * @param array $params
	 * @param array $headers
	 *
	 * @return array
	 *
	 * @throws \XFApi\Exception\XFApiException
	 */
	public function requestGet($endpoint, array $params = [], array $headers = [])
	{
		$boardUrl = 'N/A';
		$versionId = 0;
		
		if (class_exists('XF', false))
		{
			$boardUrl = \XF::options()->boardUrl;
			$versionId = \XF::$versionId;
		}
		
		$headers = array_replace([
			'X-DragonByte-BoardUrl' => $boardUrl,
			'X-DragonByte-HttpHost' => !empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'N/A',
			'X-DragonByte-Software' => 'XenForo',
			'X-DragonByte-SoftwareVersion' => $versionId
		], $headers);
		
		return parent::requestGet($endpoint, $params, $headers);
	}
}