<?php

namespace XFApi\Dto;

abstract class AbstractTreeDto extends AbstractDto implements \Countable, \Iterator, \ArrayAccess
{
    protected $_treeMap;
    protected $_items;

    public function __construct(array $treeMap, array $items)
    {
        $this->_treeMap = $treeMap;

        $itemDtoClass = $this->getItemDtoClass();
        $itemDtos = [];
        foreach ($items as $key => $item) {
            $itemDtos[$key] = new $itemDtoClass($item);
        }

        $this->setItems($itemDtos);
    }

    public function count()
    {
        return count($this->_items);
    }

    public function getItems()
    {
        return $this->_items;
    }

    public function setItems(array $items)
    {
        $this->_items = $items;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
    }

    public function current()
    {
        // TODO: Implement current() method.
    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function key()
    {
        // TODO: Implement key() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    abstract protected function getItemDtoClass();

    abstract protected function getItemsKey();
}
