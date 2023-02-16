<?php

namespace PagSeguro\Resources\Factory\Request\DirectPayment;

use PagSeguro\Domains\Document;
use PagSeguro\Domains\Phone;
use PagSeguro\Enum\Properties\Current;

/** Class Sender from Direct Payment
 * @package PagSeguro\Resources\Factory\Request\DirectPayment
 */
class Sender
{

    /**
     * @var \PagSeguro\Domains\Sender
     */
    private $sender;

    /**
     * Sender constructor.
     */
    public function __construct()
    {
        $this->sender = new \PagSeguro\Domains\DirectPayment\Sender();
    }

    /**
     * @param \PagSeguro\Domains\DirectPayment\Sender $sender
     * @return \PagSeguro\Domains\DirectPayment\Sender
     */
    public function instance(\PagSeguro\Domains\DirectPayment\Sender $sender)
    {
        return $sender;
    }

    /**
     * @param $array
     * @return \PagSeguro\Domains\Shipping
     */
    public function withArray($array)
    {
        $properties = new Current;
        return $this->sender->setName($array[$properties::SENDER_NAME])
            ->setEmail($array[$properties::SENDER_EMAIL])
            ->setPhone($array["phone"])
            ->setDocuments($array["document"])
            ->setIp($array[$properties::SENDER_IP]);
    }

    /**
     * @param $name
     * @param $email
     * @param Phone $phone
     * @param Document $document
     * @param $ip
     * @return \PagSeguro\Domains\DirectPayment\Sender
     */
    public function withParameters(
        $name,
        $email,
        Phone $phone,
        Document $document,
        $ip
    ) {
        $this->sender->setName($name)
            ->setEmail($email)
            ->setPhone($phone)
            ->setDocuments($document)
            ->setIp($ip);
        return $this->sender;
    }

    public function setHash($hash)
    {
        $this->sender->setHash($hash);
        return $this->sender;
    }
}
