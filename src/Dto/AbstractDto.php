<?php

namespace XFApi\Dto;

/**
 * Class AbstractDto
 * @package XFApi\Dto
 */
abstract class AbstractDto
{
    public abstract function __get($name);
}