<?php

namespace XFApi\Domain\DBTech\eCommerce;

use XFApi\Dto\DBTech\eCommerce\CategoryDto;
use XFApi\Dto\DBTech\eCommerce\CategoriesDto;

/**
 * Class CategoryDomain
 *
 * @package XFApi\Domain\DBTech\eCommerce
 */
class CategoryDomain extends AbstracteCommerceDomain
{
    /**
     * @param int $page
     *
     * @return \XFApi\Dto\AbstractPaginatedDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getCategories($page = 1)
    {
        $uri = $this->getUri('');
        $categories = $this->get($uri, ['page' => $page]);

        return $this->getPaginatedDto(CategoriesDto::class, $categories['tree_map'], $categories['categories']);
    }
    
    /**
     * @param $categoryId
     *
     * @return \XFApi\Dto\AbstractItemDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getCategory($categoryId)
    {
        $uri = $this->getUri(null, ['category_id' => $categoryId]);
        $category = $this->get($uri);
        return $this->getDto(CategoryDto::class, $category['category']);
    }
    
    /**
     * @param null $uri
     * @param array $params
     *
     * @return string
     */
    protected function getUri($uri = null, array $params = [])
    {
        $return = 'dbtech-ecommerce/categories';
        if (isset($params['category_id'])) {
            $return .= '/' . $params['category_id'];
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
        return CategoriesDto::class;
    }
}
