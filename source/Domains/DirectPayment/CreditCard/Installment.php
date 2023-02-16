<?php

namespace PagSeguro\Domains\DirectPayment\CreditCard;

/** Description of Installment
 *
 * @package PagSeguro\Domains\DirectPayment\CreditCard
 */
class Installment
{
    private $quantity;
    private $value;
    private $noInterestInstallmentQuantity;

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getNoInterestInstallmentQuantity()
    {
        return $this->noInterestInstallmentQuantity;
    }

    public function setNoInterestInstallmentQuantity($noInterestQuantity)
    {
        $this->noInterestInstallmentQuantity = $noInterestQuantity;
        return $this;
    }
}
