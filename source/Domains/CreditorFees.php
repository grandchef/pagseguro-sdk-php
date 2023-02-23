<?php

namespace PagSeguro\Domains;

/** Class CreditorFees
 */
class CreditorFees
{
    private $intermediationRateAmount;

    private $intermediationFeeAmount;

    private $installmentFeeAmount;

    private $operationalFeeAmount;

    private $commissionFeeAmount;

    /**
     * @return mixed
     */
    public function getIntermediationFeeAmount()
    {
        return $this->intermediationFeeAmount;
    }

    /**
     * @param  mixed  $intermediationFeeAmount
     * @return CreditorFees
     */
    public function setIntermediationFeeAmount($intermediationFeeAmount)
    {
        $this->intermediationFeeAmount = $intermediationFeeAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntermediationRateAmount()
    {
        return $this->intermediationRateAmount;
    }

    /**
     * @param  mixed  $intermediationRateAmount
     * @return CreditorFees
     */
    public function setIntermediationRateAmount($intermediationRateAmount)
    {
        $this->intermediationRateAmount = $intermediationRateAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstallmentFeeAmount()
    {
        return $this->installmentFeeAmount;
    }

    /**
     * @param  mixed  $installmentFeeAmount
     * @return CreditorFees
     */
    public function setInstallmentFeeAmount($installmentFeeAmount)
    {
        $this->installmentFeeAmount = $installmentFeeAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperationalFeeAmount()
    {
        return $this->operationalFeeAmount;
    }

    /**
     * @param  mixed  $operationalFeeAmount
     * @return CreditorFees
     */
    public function setOperationalFeeAmount($operationalFeeAmount)
    {
        $this->operationalFeeAmount = $operationalFeeAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommissionFeeAmount()
    {
        return $this->commissionFeeAmount;
    }

    /**
     * @param  mixed  $commissionFeeAmount
     * @return CreditorFees
     */
    public function setCommissionFeeAmount($commissionFeeAmount)
    {
        $this->commissionFeeAmount = $commissionFeeAmount;

        return $this;
    }
}
