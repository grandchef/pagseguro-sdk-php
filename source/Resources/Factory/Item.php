<?php

namespace PagSeguro\Resources\Factory;

use PagSeguro\Enum\Properties\Current;

/** Class Shipping
 */
class Item
{
    /**
     * @var array
     */
    private $item;

    /**
     * Item constructor.
     */
    public function __construct()
    {
        $this->item = [];
    }

    /**
     * @return \PagSeguro\Domains\Item
     */
    public function instance(\PagSeguro\Domains\Item $item)
    {
        return $item;
    }

    /**
     * @return array
     */
    public function withArray($array)
    {
        $properties = new Current;

        $item = new \PagSeguro\Domains\Item();
        $item->setId($array[$properties::ITEM_ID])
            ->setAmount($array[$properties::ITEM_AMOUNT])
            ->setDescription($array[$properties::ITEM_DESCRIPTION])
            ->setQuantity($array[$properties::ITEM_QUANTITY])
            ->setWeight($array[$properties::ITEM_WEIGHT])
            ->setShippingCost($array[$properties::ITEM_SHIPPING_COST]);

        array_push($this->item, $item);

        return $this->item;
    }

    /**
     * @param  null  $weight
     * @param  null  $shippingCost
     * @return array
     */
    public function withParameters(
        $id,
        $description,
        $quantity,
        $amount,
        $weight = null,
        $shippingCost = null
    ) {
        $item = new \PagSeguro\Domains\Item();
        $item->setId($id)
            ->setAmount($amount)
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setWeight($weight)
            ->setShippingCost($shippingCost);
        array_push($this->item, $item);

        return $this->item;
    }
}
