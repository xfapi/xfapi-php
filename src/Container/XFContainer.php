<?php

namespace XFApi\Container;

use XFApi\Domain\XF\ThreadDomain;

/**
 * Class XF
 * @package XFApi\Container
 *
 * @property-read ThreadDomain $thread
 */
class XFContainer extends AbstractContainer
{
    protected $_thread;
    
    /**
     * @return ThreadDomain
     */
    public function getThread()
    {
        if (!$this->_thread) {
            $this->_thread = new ThreadDomain($this->getApiClient());
        }
        
        return $this->_thread;
    }
}
