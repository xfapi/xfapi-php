<?php

namespace XFApi\Container;

use XFApi\Domain\XF\ThreadDomain;
use XFApi\Domain\XF\ProductDomain;

/**
 * Class XF
 * @package XFApi\Container
 *
 * @property-read ThreadDomain $thread
 * @property-read ProductDomain $product
 */
class XFContainer extends AbstractContainer
{
	protected $_thread;
	protected $_product;
	
	/**
	 * @return ThreadDomain
	 */
	public function getThread()
	{
		if (!$this->_thread) {
			$this->_thread = new ThreadDomain($this->getApiClient());
		}
		
		return $this->_thread;
	}
	
	/**
	 * @return ProductDomain
	 */
	public function getProduct()
	{
		if (!$this->_product) {
			$this->_product = new ProductDomain($this->getApiClient());
		}
		
		return $this->_product;
	}
}