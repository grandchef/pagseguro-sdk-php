<?php

namespace PagSeguro\Parsers\Transaction\Search\Date;

use PagSeguro\Parsers\Transaction\Search\Transactions;

/** Class Transaction
 */
class Transaction extends Transactions
{
    use \PagSeguro\Parsers\Response\Currency;
    use \PagSeguro\Parsers\Response\PaymentMethod;

    private $status;

    private $lastEventDate;

    private $cancellationSource;

    /**
     * @return mixed
     */
    public function getCancellationSource()
    {
        return $this->cancellationSource;
    }

    /**
     * @param  mixed  $cancellationSource
     * @return Transaction
     */
    public function setCancellationSource($cancellationSource)
    {
        $this->cancellationSource = $cancellationSource;

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
     * @param  mixed  $lastEventDate
     * @return Transaction
     */
    public function setLastEventDate($lastEventDate)
    {
        $this->lastEventDate = $lastEventDate;

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
     * @param  mixed  $status
     * @return Transaction
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
