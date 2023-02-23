<?php

namespace PagSeguro\Parsers;

use PagSeguro\Domains\Requests\Requests;

/** Trait PreApproval
 */
trait PreApproval
{
    /**
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];
        if (! is_null($request->getPreApproval())) {
            if (! is_null($request->getPreApproval()->getCharge())) {
                $data[$properties::PRE_APPROVAL_CHARGE] = $request->getPreApproval()->getCharge();
            }
            if (! is_null($request->getPreApproval()->getName())) {
                $data[$properties::PRE_APPROVAL_NAME] = $request->getPreApproval()->getName();
            }
            if (! is_null($request->getPreApproval()->getDetails())) {
                $data[$properties::PRE_APPROVAL_DETAILS] =
                    $request->getPreApproval()->getDetails();
            }
            if (! is_null($request->getPreApproval()->getAmountPerPayment())) {
                $data[$properties::PRE_APPROVAL_AMOUNT_PER_PAYMENT] =
                    $request->getPreApproval()->getAmountPerPayment();
            }
            if (! is_null($request->getPreApproval()->getMaxAmountPerPayment())) {
                $data[$properties::PRE_APPROVAL_MAX_AMOUNT_PER_PAYMENT] =
                    $request->getPreApproval()->getMaxAmountPerPayment();
            }
            if (! is_null($request->getPreApproval()->getPeriod())) {
                $data[$properties::PRE_APPROVAL_PERIOD] = $request->getPreApproval()->getPeriod();
            }
            if (! is_null($request->getPreApproval()->getMaxPaymentsPerPeriod())) {
                $data[$properties::PRE_APPROVAL_MAX_PAYMENTS_PER_PERIOD] =
                    $request->getPreApproval()->getMaxPaymentsPerPeriod();
            }
            if (! is_null($request->getPreApproval()->getMaxAmountPerPeriod())) {
                $data[$properties::PRE_APPROVAL_MAX_AMOUNT_PER_PERIOD] =
                    $request->getPreApproval()->getMaxAmountPerPeriod();
            }
            if (! is_null($request->getPreApproval()->getInitialDate())) {
                $data[$properties::PRE_APPROVAL_INITIAL_DATE] =
                    $request->getPreApproval()->getInitialDate();
            }
            if (! is_null($request->getPreApproval()->getFinalDate())) {
                $data[$properties::PRE_APPROVAL_FINAL_DATE] =
                    $request->getPreApproval()->getFinalDate();
            }
            if (! is_null($request->getPreApproval()->getMaxTotalAmount())) {
                $data[$properties::PRE_APPROVAL_MAX_TOTAL_AMOUNT] =
                    $request->getPreApproval()->getMaxTotalAmount();
            }
        }

        return $data;
    }
}
