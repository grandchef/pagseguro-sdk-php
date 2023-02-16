<?php

namespace PagSeguro\Parsers\Response;

use PagSeguro\Domains\Document;
use PagSeguro\Domains\Phone;

/** Trait Sender
 * @package PagSeguro\Parsers\Response
 */
trait Sender
{
    /**
     * @var
     */
    private $sender;

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $phone = new Phone();

        if (isset($sender->phone)) {
            $phone
                ->setAreaCode(current($sender->phone->areaCode))
                ->setNumber(current($sender->phone->number));
        }

        $senderClass = new \PagSeguro\Domains\Sender();
        $this->sender = $senderClass->setName(current($sender->name))
            ->setEmail(current($sender->email))
            ->setPhone($phone)
            ->setDocuments(new Document());

        return $this;
    }
}
