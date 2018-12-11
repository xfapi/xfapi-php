<?php

namespace XFApi\XF;

use XFApi\AbstractDomain;
use XFApi\Dto\XF\ThreadDto;

class Thread extends AbstractDomain
{
    public function get($threadId)
    {
        $uri = $this->getUri('', ['thread_id' => $threadId]);
        $thread = $this->requestGet($uri);
        return $this->getDto($thread['thread']);
    }

    protected function getDto(array $attributes)
    {
        return new ThreadDto($attributes);
    }

    protected function getUri($uri, array $params = [])
    {
        $return = 'threads';
        if (isset($params['thread_id'])) {
            $return .= '/' . $params['thread_id'];
        }

        if (!empty($uri)) {
            $return .= '/' . $uri;
        }

        return $return;
    }

}