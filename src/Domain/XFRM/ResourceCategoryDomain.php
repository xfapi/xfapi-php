<?php

namespace XFApi\Domain\XFRM;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XFRM\ResourceCategoryDto;
use XFApi\Dto\XFRM\ResourceCategoriesDto;

class ResourceCategoryDomain extends AbstractDomain
{
    public function getCategories($page = 1)
    {
        $uri = $this->getUri('');
        $categories = $this->get($uri, ['page' => $page]);

        return $this->getPaginatedDto(ResourceCategoriesDto::class, $categories['tree_map'], $categories['nodes']);
    }

    public function getCategory($categoryId)
    {
        $uri = $this->getUri(null, ['category_id' => $categoryId]);
        $category = $this->get($uri);
        return $this->getDto(ResourceCategoryDto::class, $category['category']);
    }

    protected function getUri($uri = null, array $params = [])
    {
        $return = 'resource-categories';
        if (isset($params['category_id'])) {
            $return .= '/' . $params['category_id'];
        }

        if (!empty($uri)) {
            $return .= '/' . $uri;
        }

        return $return;
    }

    protected function getDtoClass()
    {
        return ResourceCategoriesDto::class;
    }
}