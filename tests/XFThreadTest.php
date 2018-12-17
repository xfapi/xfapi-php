<?php

require_once './AbstractTest.php';

final class XFThreadTest extends AbstractTest
{
    /**
     * @var \XFApi\Domain\XF\ThreadDomain
     */
    protected $api;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->api = $this->endpoint('thread');
    }

    public function testThreads()
    {
        $threads = $this->api->getThreads();
        $class = get_class($threads);

        $this->assertInstanceOf(
            \XFApi\Dto\AbstractDto::class,
            $threads,
            "{$class} not instance of " . \XFApi\Dto\AbstractDto::class
        );
        $this->assertInstanceOf(
            \XFApi\Dto\AbstractPaginatedDto::class,
            $threads,
            "{$class} not instance of " . \XFApi\Dto\AbstractPaginatedDto::class
        );
        $this->assertInstanceOf(
            \XFApi\Dto\XF\ThreadsDto::class,
            $threads,
            "{$class} not instance of " . \XFApi\Dto\XF\ThreadsDto::class
        );

        $invalidPage = $this->api->getThreads(PHP_INT_MAX);
        $this->assertFalse($invalidPage->valid(), "Invalid page reported as valid.");

        $firstPage = $this->api->getThreads(1);
        $this->assertTrue($firstPage->valid(), "Valid page reported as invalid.");

        $secondPage = $this->api->getThreads(2);
        $this->assertNotEquals($firstPage->getItems(), $secondPage->getItems(), "First and second page items are equal.");
    }

    public function testThread()
    {
        $thread = $this->api->getThread(1);
        $class = get_class($thread);

        $this->assertInstanceOf(
            \XFApi\Dto\AbstractDto::class,
            $thread,
            "{$class} not instance of " . \XFApi\Dto\AbstractDto::class
        );
        $this->assertInstanceOf(
            \XFApi\Dto\AbstractItemDto::class,
            $thread,
            "{$class} not instance of " . \XFApi\Dto\AbstractPaginatedDto::class
        );
        $this->assertInstanceOf(
            \XFApi\Dto\XF\ThreadDto::class,
            $thread,
            "{$class} not instance of " . \XFApi\Dto\XF\ThreadDto::class
        );

        $invalidThead = $this->api->getThread(PHP_INT_MAX);
        // TODO: Test invalid thread

        // TODO: Test some attributes?
    }
}
