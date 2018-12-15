<?php

namespace XFApi\Domain\XFRM;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XFRM\ResourceUpdateDto;

class ResourceUpdateDomain extends AbstractDomain
{
    public function getUpdate($updateId)
    {
        $uri = $this->getUri(null, ['resource_update_id' => $updateId]);
        $update = $this->get($uri);

        return $this->getDto(ResourceUpdateDto::class, $update['update']);
    }

    protected function getUri($uri = null, array $params = [])
    {
        return 'resource-updates' . '/' . $params['resource_update_id'];
    }

    protected function getDtoClass()
    {
        return ResourceUpdateDto::class;
    }
}