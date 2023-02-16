<?php

namespace PagSeguro\Parsers\Transaction\Search\Abandoned;

use PagSeguro\Parsers\Transaction\Search\Transactions;

/** Class Transaction
 * @package PagSeguro\Parsers\Transaction\Search\Abandoned
 */
class Transaction extends Transactions
{
    /**
     * @var
     */
    private $recoveryCode;

    /**
     * @var
     */
    private $grossAmount;

    /**
     * @return mixed
     */
    public function getGrossAmount()
    {
        return $this->grossAmount;
    }

    /**
     * @param mixed $grossAmount
     * @return Transaction
     */
    public function setGrossAmount($grossAmount)
    {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecoveryCode()
    {
        return $this->recoveryCode;
    }

    /**
     * @param mixed $recoveryCode
     * @return Transaction
     */
    public function setRecoveryCode($recoveryCode)
    {
        $this->recoveryCode = $recoveryCode;
        return $this;
    }
}
