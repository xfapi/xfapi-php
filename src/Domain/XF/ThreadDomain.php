<?php

namespace XFApi\Domain\XF;

use XFApi\Domain\AbstractDomain;
use XFApi\Dto\XF\ThreadDto;
use XFApi\Dto\XF\ThreadsDto;

class ThreadDomain extends AbstractDomain
{
	/**
	 * @param int $page
	 *
	 * @return \XFApi\Dto\AbstractPaginatedDto
	 * @throws \XFApi\Exception\XFApiException
	 */
    public function getThreads($page = 1)
    {
        $uri = $this->getUri('');
        $threads = $this->get($uri, ['page' => $page]);

        return $this->getPaginatedDto(ThreadsDto::class, $threads['threads'], $threads['pagination']);
    }
	
	/**
	 * @param $threadId
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

//    public function getThreadPosts($threadId)
//    {
//        $uri = $this->getUri('posts', ['thread_id' => $threadId]);
//        $posts = $this->requestGet($uri);
//
//        dump($posts);die;
//    }

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