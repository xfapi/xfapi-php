<?php

namespace XFApi\Domain\Audentio\WpConnect;

use XFApi\Domain\XF\ThreadDomain as XFThreadDomain;
use XFApi\Dto\XF\PostsDto;
use XFApi\Dto\XF\ThreadDto;
use XFApi\Dto\XF\ThreadsDto;

/**
 * Class ThreadDomain
 *
 * @package XFApi\Domain\Audentio\WpConnect
 */
class ThreadDomain extends XFThreadDomain
{
    /**
     * @param int $threadId
     * @param int $page
     *
     * @return \XFApi\Dto\AbstractPaginatedDto
     * @throws \XFApi\Exception\XFApiException
     */
    public function getThreadFeaturedPosts($threadId)
    {
        $uri = $this->getUri('featured-posts', ['thread_id' => $threadId]);
        $posts = $this->get($uri);

        return $this->getPaginatedDto(PostsDto::class, $posts['posts'], []);
    }
}
