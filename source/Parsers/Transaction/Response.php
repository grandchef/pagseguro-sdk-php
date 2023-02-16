<?php

namespace PagSeguro\Parsers\Transaction;

use PagSeguro\Parsers\Response\CreditorFees;
use PagSeguro\Parsers\Response\Currency;
use PagSeguro\Parsers\Response\Item;
use PagSeguro\Parsers\Response\PaymentMethod;
use PagSeguro\Parsers\Response\Sender;
use PagSeguro\Parsers\Response\Shipping;

/** Class Response
 * @package PagSeguro\Parsers\Transaction
 */
class Response
{
    use Currency;
    use CreditorFees;
    use Item;
    use PaymentMethod;
    use Sender;
    use Shipping;

    /**
     * @var
     */
    private $date;
    /**
     * @var
     */
    private $code;
    /**
     * @var
     */
    private $reference;
    /**
     * @var
     */
    private $type;
    /**
     * @var
     */
    private $status;
    /**
     * @var
     */
    private $lastEventDate;
    /**
     * @var
     */
    private $installmentCount;

    /**
     * Only present when the status = 7
     * @var string
     */
    private $cancelationSource;

    /**
     * @var
     */
    private $promoCode;

    public function getCancelationSource()
    {
        return $this->cancelationSource;
    }

    public function setCancelationSource($cancelationSource)
    {
        $this->cancelationSource = $cancelationSource;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstallmentCount()
    {
        return $this->installmentCount;
    }

    /**
     * @param mixed $installmentCount
     * @return Response
     */
    public function setInstallmentCount($installmentCount)
    {
        $this->installmentCount = $installmentCount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     * @return Response
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return Response
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastEventDate()
    {
        return $this->lastEventDate;
    }

    /**
     * @param mixed $lastEventDate
     * @return Response
     */
    public function setLastEventDate($lastEventDate)
    {
        $this->lastEventDate = $lastEventDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     * @return Response
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return Response
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return Response
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * @param mixed $installmentCount
     * @return Response
     */
    public function setPromoCode($promoCode)
    {
        $this->promoCode = $promoCode;
        return $this;
    }
}
