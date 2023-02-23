<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Helpers\InitializeObject;

trait Item
{
    private $items;

    public function addItems()
    {
        $this->items = InitializeObject::Initialize(
            $this->items,
            new \PagSeguro\Resources\Factory\Item()
        );

        return $this->items;
    }

    public function setItems($items)
    {
        if (is_array($items)) {
            $arr = [];
            foreach ($items as $key => $item) {
                if ($item instanceof \PagSeguro\Domains\Item) {
                    $arr[$key] = $item;
                } else {
                    if (is_array($item)) {
                        $arr[$key] = new \PagSeguro\Domains\Item($item);
                    }
                }
            }
            $this->items = $arr;
        }
    }

    public function getItems()
    {
        return current($this->items);
    }

    public function itemLenght()
    {
        return count(current($this->items));
    }
}
