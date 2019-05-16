<?php

namespace XFApi\Domain\XFRM;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XFRM\ResourceDto;
use XFApi\Dto\XFRM\ResourcesDto;

class ResourceDomain extends AbstractDomain
{
    public function getResources($page = 1)
    {
        $uri = $this->getUri('');
        $resources = $this->get($uri, ['page' => $page]);

        return $this->getPaginatedDto(ResourcesDto::class, $resources['resources'], $resources['pagination']);
    }

    public function getResource($resourceId)
    {
        $uri = $this->getUri(null, ['resource_id' => $resourceId]);
        $resource = $this->get($uri);
        return $this->getDto(ResourceDto::class, $resource['resource']);
    }

    protected function getUri($uri = null, array $params = [])
    {
        $return = 'resources';
        if (isset($params['resource_id'])) {
            $return .= '/' . $params['resource_id'];
        }

        if (!empty($uri)) {
            $return .= '/' . $uri;
        }

        return $return;
    }

    protected function getDtoClass()
    {
        return ResourcesDto::class;
    }
}
