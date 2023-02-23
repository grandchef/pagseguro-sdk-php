<?php

namespace PagSeguro\Domains\Requests;

/** Class Currency
 */
trait Currency
{
    private $currency;

    private $extraAmount;

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    public function setExtraAmount($extraAmount)
    {
        $this->extraAmount = $extraAmount;
    }

    /**
     * @return mixed
     */
    public function getExtraAmount()
    {
        return $this->extraAmount;
    }
}
