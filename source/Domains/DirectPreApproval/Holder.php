<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class Holder
 *
 */
class Holder
{
    public $name;

    public $birthDate;

    public $documents;

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
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
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
