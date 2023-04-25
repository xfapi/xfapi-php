<?php

namespace XFApi\Dto;

/**
 * Class AbstractPaginatedDto
 * @package XFApi\Dto
 *
 * @property PaginationDto $pagination
 */
abstract class AbstractPaginatedDto extends AbstractDto implements \Countable, \Iterator, \ArrayAccess
{
    protected $_items;
    protected $_pagination;

    public function __construct(array $items, array $pagination)
    {
        $itemDtoClassName = $this->getItemDtoClass();
        $itemDtos = [];
        foreach ($items as $key => $item) {
            $itemDtos[$key] = new $itemDtoClassName($item);
        }

        $this->setItems($itemDtos);
        $this->setPagination(new PaginationDto($pagination));
    }

    #[\ReturnTypeWillChange]
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

    public function getPagination()
    {
        return $this->_pagination;
    }

    public function setPagination(PaginationDto $pagination)
    {
        $this->_pagination = $pagination;
    }

    public function __get($name)
    {
        if ($name === $this->getItemsKey()) {
            return $this->getItems();
        }

        if ($name === 'pagination') {
            return $this->getPagination();
        }

        return null;
    }

    // ArrayAccess
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->_items);
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        if (array_key_exists($offset, $this->_items)) {
            return $this->_items[$offset];
        }

        return null;
    }

    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
    }

    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
    }

    // Iterator
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->_items);
    }

    #[\ReturnTypeWillChange]
    public function next()
    {
        return next($this->_items);
    }

    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->_items);
    }

    #[\ReturnTypeWillChange]
    public function valid()
    {
        $key = key($this->_items);
        return ($key !== null && $key !== false);
    }

    #[\ReturnTypeWillChange]
    public function rewind()
    {
        reset($this->_items);
    }

    abstract protected function getItemDtoClass();

    abstract protected function getItemsKey();
}
