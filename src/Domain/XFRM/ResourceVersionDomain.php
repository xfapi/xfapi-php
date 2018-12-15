<?php

namespace XFApi\Domain\XFRM;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XFRM\ResourceVersionDto;

class ResourceVersionDomain extends AbstractDomain
{
    public function getVersion($resourceId)
    {
        $uri = $this->getUri(null, ['resource_id' => $resourceId]);
        $version = $this->get($uri);

        return $this->getDto(ResourceVersionDto::class, $version['version']);
    }

    protected function getUri($uri = null, array $params = [])
    {
        return 'resource-versions' . '/' . $params['resource_id'];
    }

    protected function getDtoClass()
    {
        return ResourceVersionDto::class;
    }
}