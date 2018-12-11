<?php

namespace XFApi\Dto;

/**
 * Class AbstractDto
 * @package XFApi\Dto
 */
abstract class AbstractDto
{
    protected $_attributes = [];

    /**
     * AbstractDto constructor.
     * @param array $items
     */
    public function __construct(array $items)
    {
        foreach ($items as $name => $value) {
            $this->{$name} = $value;
        }
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->_attributes;
    }

    public function generateClassDoc()
    {
        $fqClassName = get_class($this);
        $fqClassParts = explode('\\', $fqClassName);
        $className = end($fqClassParts);
        $namespace = substr($fqClassName, 0, -(strlen($className) + 1));

        $classDoc = <<<EOF
/**
 * Class $className
 * @package $namespace
 *
EOF;

        foreach ($this->getAttributes() as $name => $value) {
            $type = gettype($value);
            $classDoc .= "\n * @property-read $type \$$name";
        }
        $classDoc .= "\n" . <<<EOF
 */
EOF;
        return $classDoc;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->_attributes[$name] = $value;
    }

    /**
     * @param string $name
     * @return mixed|null
     */
    public function __get($name)
    {
        if (isset($this->_attributes[$name])) {
            return $this->_attributes[$name];
        }

        return null;
    }
}