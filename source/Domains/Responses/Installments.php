<?php

namespace PagSeguro\Domains\Responses;

/** Domain class for Installments
 */
class Installments
{
    /**
     *
     * @var
     */
    private $installments;

    /**
     * @return array
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * @param  PagSeguro\Domains\Responses\Installment $installments
     */
    public function setInstallments($installments)
    {
        if ($installments) {
            if (is_object($installments)) {
                $this->addInstallment($installments);
            } else {
                foreach ($installments as $installment) {
                    $this->addInstallment($installment);
                }
            }
        }
    }

    /**
     * @param PagSeguro\Domains\Responses\Installment $installment
     */
    private function addInstallment($installment)
    {
        $response = new Installment;
        $response->setCardBrand(current($installment->cardBrand))
            ->setQuantity(current($installment->quantity))
            ->setAmount(current($installment->amount))
            ->setTotalAmount(current($installment->totalAmount))
            ->setInterestFree(current($installment->interestFree));

        $this->installments[] = $response;
    }
}
