<?php

namespace PagSeguro\Resources\Factory;

use PagSeguro\Enum\Properties\Current;

/** Class Phone
 * @package PagSeguro\Resources\Factory
 */
class Phone
{
    /**
     * @var \PagSeguro\Domains\Phone
     */
    private $phone;

    /**
     * Phone constructor.
     */
    public function __construct()
    {
        $this->phone = new \PagSeguro\Domains\Phone();
    }

    /**
     * @param \PagSeguro\Domains\Phone $phone
     * @return \PagSeguro\Domains\Phone
     */
    public function instance(\PagSeguro\Domains\Phone $phone)
    {
        return $phone;
    }

    /**
     * @param $array
     */
    public function withArray($array)
    {
        $properties = new Current();
        $this->phone->setAreaCode($array[$properties::SENDER_PHONE_AREA_CODE])
            ->setNumber($array[$properties::SENDER_PHONE_NUMBER]);
    }

    /**
     * @param $areaCode
     * @param $number
     * @return \PagSeguro\Domains\Phone
     */
    public function withParameters($areaCode, $number)
    {
        $this->phone->setAreaCode($areaCode)
            ->setNumber($number);
        return $this->phone;
    }
}
