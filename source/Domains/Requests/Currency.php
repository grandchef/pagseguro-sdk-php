<?php

namespace PagSeguro\Domains\Requests;

/** Class Currency
 * @package PagSeguro\Domains\Requests
 */
trait Currency
{
    /**
     * @var
     */
    private $currency;

    /**
     * @var
     */
    private $extraAmount;

    /**
     * @param $currency
     */
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

    /**
     * @param $extraAmount
     */
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
