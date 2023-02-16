<?php

namespace PagSeguro\Domains;

/** Class Item
 * @package PagSeguro\Domains
 */
class Item
{
    /***
     * Product identifier, such as SKU
     */
    private $id;
    /***
     * Product description
     */
    private $description;
    /***
     * Quantity
     */
    private $quantity;
    /***
     * Product unit price
     */
    private $amount;
    /***
     * Single unit weight, in grams
     */
    private $weight;
    /***
     * Single unit shipping cost
     */
    private $shippingCost;

    /**
     * @return double
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param double $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param integer $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return double
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    /**
     * @param double $shippingCost
     * @return $this
     */
    public function setShippingCost($shippingCost)
    {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
}
