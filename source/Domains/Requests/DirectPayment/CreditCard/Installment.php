<?php

namespace PagSeguro\Domains\Requests\DirectPayment\CreditCard;

/** Description of Installment
 *
 */
trait Installment
{
    private $installment;

    public function getInstallment()
    {
        return $this->installment;
    }

    public function setInstallment()
    {
        $this->installment = new \PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Installment();

        return $this->installment;
    }
}
