<?php

namespace XFApi\Dto;

/**
 * Class AbstractDto
 * @package XFApi\Dto
 */
abstract class AbstractDto
{
    abstract public function __get($name);
}
