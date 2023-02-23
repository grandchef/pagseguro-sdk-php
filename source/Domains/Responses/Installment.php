<?php

namespace PagSeguro\Domains\Responses;

/** Domain class for Installment
 */
class Installment
{
    private $cardBrand;

    private $quantity;

    private $amount;

    private $totalAmount;

    private $interestFree;

    /**
     * Get the cardBrand attribute
     *
     * @return Installment
     */
    public function getCardBrand()
    {
        return $this->cardBrand;
    }

    /**
     * Get the quantity attribute
     *
     * @return Installment
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Get the amount attribute
     *
     * @return Installment
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get the totalAmount attribute
     *
     * @return Installment
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Get the cardBrand attribute
     *
     * @return Installment
     */
    public function getInterestFree()
    {
        return $this->interestFree;
    }

    /**
     * Get the cardBrand attribute
     *
     * @return Installment
     */
    public function setCardBrand($cardBrand)
    {
        $this->cardBrand = $cardBrand;

        return $this;
    }

    /**
     * Get the quantity attribute
     *
     * @return Installment
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the amount attribute
     *
     * @return Installment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the totalAmount attribute
     *
     * @return Installment
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get the setInterestFree attribute
     *
     * @return Installment
     */
    public function setInterestFree($interestFree)
    {
        $this->interestFree = $interestFree;

        return $this;
    }
}
