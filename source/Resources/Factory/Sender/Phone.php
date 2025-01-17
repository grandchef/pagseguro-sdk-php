<?php

namespace PagSeguro\Resources\Factory\Sender;

use PagSeguro\Enum\Properties\Current;

/** Class Document
 */
class Phone
{
    /**
     * @var \PagSeguro\Domains\Sender
     */
    private $sender;

    /**
     * Phone constructor.
     */
    public function __construct($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return \PagSeguro\Domains\Sender
     */
    public function instance(\PagSeguro\Domains\Phone $phone)
    {
        $this->sender->setPhone($phone);

        return $this->sender;
    }

    /**
     * @return \PagSeguro\Domains\Sender
     */
    public function withArray($array)
    {
        $properties = new Current;
        $phone = new \PagSeguro\Domains\Phone();
        $phone->setAreaCode($array[$properties::SENDER_PHONE_AREA_CODE])
            ->setNumber($array[$properties::SENDER_PHONE_NUMBER]);
        $this->sender->setPhone($phone);

        return $this->sender;
    }

    /**
     * @return \PagSeguro\Domains\Sender
     */
    public function withParameters($areaCode, $number)
    {
        $phone = new \PagSeguro\Domains\Phone();
        $phone->setAreaCode($areaCode)
            ->setNumber($number);
        $this->sender->setPhone($phone);

        return $this->sender;
    }
}
