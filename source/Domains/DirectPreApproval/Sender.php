<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Sender
 *
 * @package PagSeguro\Domains\DirectPreApproval
 */
class Sender
{
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $ip;
    /**
     * @var
     */
    public $hash;
    /**
     * @var
     */
    public $phone;
    /**
     * @var
     */
    public $documents;
    /**
     * @var
     */
    public $address;

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @param $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return Phone
     */
    public function setPhone()
    {
        $this->phone = new Phone();

        return $this->phone;
    }

    /**
     * @param Document $document
     *
     * @return $this
     */
    public function setDocuments(Document $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * @return Address
     */
    public function setAddress()
    {
        $this->address = new Address();

        return $this->address;
    }
}