<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\PostsDto;
use XFApi\Dto\XF\ThreadDto;
use XFApi\Dto\XF\ThreadsDto;

class ThreadDomain extends AbstractDomain
{
    public function create($nodeId, $title, $message, array $data = [])
    {
        $uri = $this->getUri();
        $thread = $this->post($uri, [], array_merge([
            'node_id' => $nodeId,
            'title' => $title,
            'message' => $message,
        ], $data));

        return $this->getDto(ThreadDto::class, $thread['thread']);
    }

    /**
     * @param int $page
     *
     * @return \XFApi\Dto\AbstractPaginatedDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getThreads($page = 1)
    {
        $uri = $this->getUri();
        $threads = $this->get($uri, ['page' => $page]);

        return $this->getPaginatedDto(ThreadsDto::class, $threads['threads'], $threads['pagination']);
    }
    
    /**
     * @param int $threadId
     *
     * @return \XFApi\Dto\AbstractItemDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getThread($threadId)
    {
        $uri = $this->getUri(null, ['thread_id' => $threadId]);
        $thread = $this->get($uri);
        return $this->getDto(ThreadDto::class, $thread['thread']);
    }

    /**
     * @param int $threadId
     * @param int $page
     *
     * @return \XFApi\Dto\AbstractPaginatedDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getThreadPosts($threadId, $page = 1)
    {
        $uri = $this->getUri('posts', ['thread_id' => $threadId]);
        $posts = $this->get($uri, ['page' => $page]);

        return $this->getPaginatedDto(PostsDto::class, $posts['posts'], $posts['pagination']);
    }

    protected function getUri($uri = null, array $params = [])
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

    protected function getDtoClass()
    {
        return ThreadDto::class;
    }
}
