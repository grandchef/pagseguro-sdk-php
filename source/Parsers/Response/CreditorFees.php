<?php

namespace PagSeguro\Parsers\Response;

/** Trait CreditorFees
 */
trait CreditorFees
{
    private $creditorFees;

    /**
     * @return mixed
     */
    public function getCreditorFees()
    {
        return $this->creditorFees;
    }

    /**
     * @return $this
     */
    public function setCreditorFees($creditorFees)
    {
        $creditor = new \PagSeguro\Domains\CreditorFees();

        if (! is_null($creditorFees->intermediationRateAmount)) {
            $creditor->setIntermediationRateAmount(current($creditorFees->intermediationRateAmount));
        }

        if (! is_null($creditorFees->intermediationFeeAmount)) {
            $creditor->setIntermediationFeeAmount(current($creditorFees->intermediationFeeAmount));
        }

        if (! is_null($creditorFees->installmentFeeAmount)) {
            $creditor->setInstallmentFeeAmount(current($creditorFees->installmentFeeAmount));
        }

        if (! is_null($creditorFees->operationalFeeAmount)) {
            $creditor->setOperationalFeeAmount(current($creditorFees->operationalFeeAmount));
        }

        if (! is_null($creditorFees->commissionFeeAmount)) {
            $creditor->setCommissionFeeAmount(current($creditorFees->commissionFeeAmount));
        }

        $this->creditorFees = $creditor;

        return $this;
    }
}
