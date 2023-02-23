<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Sender
 *
 */
class Sender
{
    public $name;

    public $email;

    public $ip;

    public $hash;

    public $phone;

    public $documents;

    public $address;

    /**
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
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
