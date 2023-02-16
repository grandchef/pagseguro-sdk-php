<?php

namespace PagSeguro\Parsers;

use PagSeguro\Domains\Requests\Requests;

/** Trait Item
 * @package PagSeguro\Parsers
 */
trait Item
{
    /**
     * @param Requests $request
     * @param $properties
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];
        $items = $request->getItems();
        if ($request->itemLenght() > 0) {
            $count = 0;

            foreach ($items as $key => $value) {
                $count++;
                if ($items[$key]->getId() != null) {
                    $data[sprintf($properties::ITEM_ID, $count)] = $items[$key]->getId();
                }
                if ($items[$key]->getDescription() != null) {
                    $data[sprintf($properties::ITEM_DESCRIPTION, $count)] = $items[$key]->getDescription();
                }
                if ($items[$key]->getQuantity() != null) {
                    $data[sprintf($properties::ITEM_QUANTITY, $count)] = $items[$key]->getQuantity();
                }
                if ($items[$key]->getAmount() != null) {
                    $amount = \PagSeguro\Helpers\Currency::toDecimal($items[$key]->getAmount());
                    $data[sprintf($properties::ITEM_AMOUNT, $count)] = $amount;
                }
                if ($items[$key]->getWeight() != null) {
                    $data[sprintf($properties::ITEM_WEIGHT, $count)] = $items[$key]->getWeight();
                }
                if ($items[$key]->getShippingCost() != null) {
                    $data[sprintf($properties::ITEM_SHIPPING_COST, $count)] = \PagSeguro\Helpers\Currency::toDecimal(
                        $items[$key]->getShippingCost()
                    );
                }
            }
        }
        return $data;
    }
}
