<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Item
 *
 */
class Item
{
    public $id;

    public $description;

    public $quantity;

    public $amount;

    public $weight;

    public $shippingCost;

    /**
     * @param  null  $weight
     * @param  null  $shippingCost
     * @return $this
     */
    public function withParameters($id, $description, $quantity, $amount, $weight = null, $shippingCost = null)
    {
        $this->id = $id;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->amount = $amount;
        $this->weight = $weight;
        $this->shippingCost = $shippingCost;

        return $this;
    }
}
