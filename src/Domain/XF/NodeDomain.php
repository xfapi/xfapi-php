<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\NodeDto;
use XFApi\Dto\XF\NodesDto;

class NodeDomain extends AbstractDomain
{
    public function getNodes()
    {
        $uri = $this->getUri();
        $nodes = $this->get($uri);

        return $this->getTreeDto(NodesDto::class, $nodes['nodes'], $nodes['tree_map']);
    }

    public function getNode($nodeId)
    {
        $uri = $this->getUri(null, ['node_id' => $nodeId]);
        $node = $this->get($uri);

        return $this->getDto(NodeDto::class, $node['node']);
    }

    protected function getUri($uri = null, array $params = [])
    {
        $return = 'nodes';
        if (isset($params['node_id'])) {
            $return .= '/' . $params['node_id'];
        }

        if (!empty($uri)) {
            $return .= '/' . $uri;
        }

        return $return;
    }

    protected function getDtoClass()
    {
        return NodesDto::class;
    }
}
