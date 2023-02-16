<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Holder
 *
 * @package PagSeguro\Domains\DirectPreApproval
 */
class Holder
{
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $birthDate;
    /**
     * @var
     */
    public $documents;
    /**
     * @var
     */
    public $phone;
    /**
     * @var BillingAddress
     */
    public $billingAddress;

    /**
     * Holder constructor.
     */
    public function __construct()
    {
        $this->billingAddress = new BillingAddress();
    }

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
     * @param $birthDate
     *
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
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
     * @return Phone
     */
    public function setPhone()
    {
        $this->phone = new Phone();

        return $this->phone;
    }

    /**
     * @return BillingAddress
     */
    public function setBillingAddress()
    {
        return $this->billingAddress;
    }
}