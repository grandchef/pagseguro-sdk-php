<?php

namespace PagSeguro\Resources\Factory;

use PagSeguro\Enum\Properties\Current;

/** Class Phone
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
     * @return \PagSeguro\Domains\Phone
     */
    public function instance(\PagSeguro\Domains\Phone $phone)
    {
        return $phone;
    }

    public function withArray($array)
    {
        $properties = new Current();
        $this->phone->setAreaCode($array[$properties::SENDER_PHONE_AREA_CODE])
            ->setNumber($array[$properties::SENDER_PHONE_NUMBER]);
    }

    /**
     * @return \PagSeguro\Domains\Phone
     */
    public function withParameters($areaCode, $number)
    {
        $this->phone->setAreaCode($areaCode)
            ->setNumber($number);

        return $this->phone;
    }
}
