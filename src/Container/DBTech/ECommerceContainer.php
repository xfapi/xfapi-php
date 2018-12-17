<?php

namespace XFApi\Container\DBTech;

use XFApi\Container\AbstractContainer;
use XFApi\Domain\DBTech\eCommerce\ProductDomain;

/**
 * Class XF
 * @package XFApi\Container
 *
 * @property-read ProductDomain $product
 */
class ECommerceContainer extends AbstractContainer
{
    protected $_product;
    
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
