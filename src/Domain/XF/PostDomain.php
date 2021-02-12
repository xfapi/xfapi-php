<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\PostDto;
use XFApi\Dto\XF\PostsDto;

class PostDomain extends AbstractDomain
{
    public function create($threadId, $message, array $data = [])
    {
        $uri = $this->getUri();
        $post = $this->post($uri, [], array_merge([
            'thread_id' => $threadId,
            'message' => $message,
        ], $data));

        return $this->getDto(PostDto::class, $post['post']);
    }

    public function getPost($postId)
    {
        $uri = $this->getUri(null, ['post_id' => $postId]);
        $post = $this->get($uri);
        return $this->getDto(PostDto::class, $post['post']);
    }

    protected function getUri($uri = null, array $params = [])
    {
        $return = 'posts';
        if (isset($params['post_id'])) {
            $return .= '/' . $params['post_id'];
        }

        if (!empty($uri)) {
            $return .= '/' . $uri;
        }

        return $return;
    }

    protected function getDtoClass()
    {
        return PostDto::class;
    }
}
