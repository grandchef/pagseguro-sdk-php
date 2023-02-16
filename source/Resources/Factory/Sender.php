<?php

namespace PagSeguro\Resources\Factory;

use PagSeguro\Domains\Document;
use PagSeguro\Domains\Phone;
use PagSeguro\Enum\Properties\Current;

/** Class Shipping
 * @package PagSeguro\Resources\Factory\Request
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
        $this->sender = new \PagSeguro\Domains\Sender();
    }

    /**
     * @param \PagSeguro\Domains\Sender $sender
     * @return \PagSeguro\Domains\Sender
     */
    public function instance(\PagSeguro\Domains\Sender $sender)
    {
        return $sender;
    }

    /**
     * @param $array
     * @return \PagSeguro\Domains\Sender
     */
    public function withArray($array)
    {
        $properties = new Current;
        return $this->sender->setName($array[$properties::SENDER_NAME])
            ->setEmail($array[$properties::SENDER_EMAIL])
            ->setPhone($array["phone"])
            ->setDocuments($array["document"]);
    }

    /**
     * @param $name
     * @param $email
     * @param Phone $phone
     * @param Document $document
     * @return \PagSeguro\Domains\Sender
     */
    public function withParameters(
        $name,
        $email,
        Phone $phone,
        Document $document
    ) {
        $this->sender->setName($name)
            ->setEmail($email)
            ->setPhone($phone)
            ->setDocuments($document);
        return $this->sender;
    }
}
