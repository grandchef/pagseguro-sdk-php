<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Item
 *
 * @package PagSeguro\Domains\DirectPreApproval
 */
class Item
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $quantity;
    /**
     * @var
     */
    public $amount;
    /**
     * @var
     */
    public $weight;
    /**
     * @var
     */
    public $shippingCost;

    /**
     * @param      $id
     * @param      $description
     * @param      $quantity
     * @param      $amount
     * @param null $weight
     * @param null $shippingCost
     *
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