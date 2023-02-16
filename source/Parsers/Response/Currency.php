<?php

namespace PagSeguro\Parsers\Response;

/** Trait Currency
 * @package PagSeguro\Parsers\Response
 */
trait Currency
{
    /**
     * @var
     */
    private $discountAmount;
    /**
     * @var
     */
    private $escrowEndDate;
    /**
     * @var
     */
    private $extraAmount;
    /**
     * @var
     */
    private $feeAmount;
    /**
     * @var
     */
    private $grossAmount;
    /**
     * @var
     */
    private $netAmount;

    /**
     * @return mixed
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * @param $discountAmount
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEscrowEndDate()
    {
        return $this->escrowEndDate;
    }

    /**
     * @param $escrowEndDate
     * @return $this
     */
    public function setEscrowEndDate($escrowEndDate)
    {
        $this->escrowEndDate = $escrowEndDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtraAmount()
    {
        return $this->extraAmount;
    }

    /**
     * @param $extraAmount
     * @return $this
     */
    public function setExtraAmount($extraAmount)
    {
        $this->extraAmount = $extraAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * @param $extraAmount
     * @return $this
     */
    public function setFeeAmount($feeAmount)
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrossAmount()
    {
        return $this->grossAmount;
    }

    /**
     * @param $grossAmount
     * @return $this
     */
    public function setGrossAmount($grossAmount)
    {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * @param $netAmount
     * @return $this
     */
    public function setNetAmount($netAmount)
    {
        $this->netAmount = $netAmount;
        return $this;
    }
}
