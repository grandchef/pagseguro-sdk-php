<?php

namespace PagSeguro\Resources\Factory\Request\DirectPayment\CreditCard\Holder;

use PagSeguro\Enum\Properties\Current;

/** Class Document
 * @package PagSeguro\Resources\Factory
 */
class Phone
{

    /**
     * @var \PagSeguro\Domains\DirectPayment\CreditCard\Holder
     */
    private $holder;

    /**
     * Phone constructor.
     * @param $holder
     */
    public function __construct($holder)
    {
        $this->holder = $holder;
    }

    /**
     * @param \PagSeguro\Domains\Phone $phone
     * @return \PagSeguro\Domains\DirectPayment\CreditCard\Holder
     */
    public function instance(\PagSeguro\Domains\Phone $phone)
    {
        $this->holder->setPhone($phone);
        return $this->holder;
    }

    /**
     * @param $array
     * @return \PagSeguro\Domains\DirectPayment\CreditCard\Holder
     */
    public function withArray($array)
    {
        $properties = new Current;
        $phone = new \PagSeguro\Domains\Phone();
        $phone->setAreaCode($array[$properties::SENDER_PHONE_AREA_CODE])
            ->setNumber($array[$properties::SENDER_PHONE_NUMBER]);
        $this->holder->setPhone($phone);
        return $this->holder;
    }


    /**
     * @param $areaCode
     * @param $number
     * @return \PagSeguro\Domains\DirectPayment\CreditCard\Holder
     */
    public function withParameters($areaCode, $number)
    {
        $phone = new \PagSeguro\Domains\Phone();
        $phone->setAreaCode($areaCode)
            ->setNumber($number);
        $this->holder->setPhone($phone);
        return $this->holder;
    }
}
