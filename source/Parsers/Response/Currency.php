<?php

namespace PagSeguro\Parsers\Response;

/** Trait Currency
 */
trait Currency
{
    private $discountAmount;

    private $escrowEndDate;

    private $extraAmount;

    private $feeAmount;

    private $grossAmount;

    private $netAmount;

    /**
     * @return mixed
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
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
     * @return $this
     */
    public function setNetAmount($netAmount)
    {
        $this->netAmount = $netAmount;

        return $this;
    }
}
