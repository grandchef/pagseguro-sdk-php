<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class PaymentMethod
 *
 */
class PaymentMethod
{
    /**
     * @var string
     */
    public $type = 'CREDITCARD';

    /**
     * @var CreditCard
     */
    public $creditCard;

    /**
     * PaymentMethod constructor.
     */
    public function __construct()
    {
        $this->creditCard = new CreditCard();
    }

    /**
     * @return CreditCard
     */
    public function setCreditCard()
    {
        return $this->creditCard;
    }
}
