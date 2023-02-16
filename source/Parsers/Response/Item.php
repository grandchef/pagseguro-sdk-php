<?php

namespace PagSeguro\Parsers\Response;

use PagSeguro\Helpers\InitializeObject;

/** Trait Item
 * @package PagSeguro\Parsers\Response
 */
trait Item
{
    /**
     * @var
     */
    private $itemCount;
    /**
     * @var
     */
    private $items;

    /**
     * @return mixed
     */
    public function getItemCount()
    {
        return $this->itemCount;
    }

    /**
     * @param $itemCount
     * @return $this
     */
    public function setItemCount($itemCount)
    {
        $this->itemCount = $itemCount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }


    /**
     * @param $items
     * @return $this
     */
    public function setItems($items)
    {
        foreach ($items->item as $value) {
            $this->addItems()->withParameters(
                current($value->id),
                current($value->description),
                current($value->quantity),
                current($value->amount)
            );
        }

        $this->items = current($this->getItems());
        return $this;
    }

    /**
     * @return object
     */
    public function addItems()
    {
        $this->items = InitializeObject::Initialize(
            $this->items,
            new \PagSeguro\Resources\Factory\Item()
        );
        return $this->items;
    }
}
