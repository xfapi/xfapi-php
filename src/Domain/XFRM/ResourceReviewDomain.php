<?php

namespace XFApi\Domain\XFRM;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XFRM\ResourceReviewDto;
use XFApi\Dto\XFRM\ResourceReviewsDto;

class ResourceReviewDomain extends AbstractDomain
{
    public function getReviews($page = 1)
    {
        $uri = $this->getUri('');
        $resources = $this->get($uri, ['page' => $page]);

        return $this->getPaginatedDto(ResourceReviewsDto::class, $resources['resources'], $resources['pagination']);
    }

    public function getReview($resourceId)
    {
        $uri = $this->getUri(null, ['resource_rating_id' => $resourceId]);
        $review = $this->get($uri);
        return $this->getDto(ResourceReviewDto::class, $review['review']);
    }

    protected function getUri($uri = null, array $params = [])
    {
        $return = 'resource-reviews';
        if (isset($params['resource_rating_id'])) {
            $return .= '/' . $params['resource_rating_id'];
        }

        if (!empty($uri)) {
            $return .= '/' . $uri;
        }

        return $return;
    }

    protected function getDtoClass()
    {
        return ResourceReviewsDto::class;
    }
}