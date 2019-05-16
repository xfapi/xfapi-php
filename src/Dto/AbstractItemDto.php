<?php

namespace XFApi\Dto;

class AbstractItemDto extends AbstractDto
{
    protected $_attributes = [];

    protected $_relations = [];

    protected $_relationCache = [];

    /**
     * AbstractItemDto constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes)
    {
        foreach ($attributes as $name => $value) {
            $this->_attributes[$name] = $value;
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
     * @return mixed|null
     */
    public function __get($name)
    {
        if (isset($this->_relations[$name])) {
            if (isset($this->_attributes[$name])) {
                if (!isset($this->_relationCache[$name])) {
                    $this->_relationCache[$name] = new $this->_relations[$name]($this->_attributes[$name]);
                }

                return $this->_relationCache[$name];
            } else {
                return null;
            }
        }

        if (isset($this->_attributes[$name])) {
            return $this->_attributes[$name];
        }

        return null;
    }
}
