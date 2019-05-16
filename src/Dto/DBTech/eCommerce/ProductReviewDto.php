<?php

namespace XFApi\Dto\DBTech\eCommerce;

use XFApi\Dto\AbstractItemDto;
use XFApi\Dto\XF\UserDto;

/**
 * Class ProductReviewDto
 * @package XFApi\Dto\DBTech\eCommerce
 *
 * @property-read integer product_rating_id
 * @property-read integer product_id
 * @property-read integer rating
 * @property-read integer rating_date
 * @property-read string message
 * @property-read string version_string
 * @property-read string author_response
 * @property-read string rating_state
 * @property-read boolean is_anonymous
 *
 * @property-read ProductDto Product
 * @property-read integer user_id
 * @property-read UserDto User
 * @property-read integer anonymous_user_id
 * @property-read UserDto AnonymousUser
 *
 * @property-read boolean can_soft_delete
 * @property-read boolean can_hard_delete
 * @property-read boolean can_author_reply
 */
class ProductReviewDto extends AbstractItemDto
{
    /**
     * @var ProductDto|null
     */
    protected $_product;
    
    /**
     * @var array
     */
    protected $_relations = [
        'Product' => ProductDto::class,
        'User' => UserDto::class,
        'AnonymousUser' => UserDto::class
    ];
    
    /**
     * @return ProductDto
     */
    public function getProduct()
    {
        if (!$this->_product) {
            $this->_product = new ProductDto($this->_attributes['Product']);
        }

        return $this->_product;
    }
}
