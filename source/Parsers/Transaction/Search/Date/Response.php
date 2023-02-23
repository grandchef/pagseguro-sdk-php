<?php

namespace PagSeguro\Parsers\Transaction\Search\Date;

/** Class Response
 */
class Response
{
    private $date;

    private $resultsInThisPage;

    private $transactions;

    private $currentPage;

    private $totalPages;

    /**
     * @return mixed
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param  mixed  $currentPage
     * @return Response
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;

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
     * @param  mixed  $date
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
    public function getResultsInThisPage()
    {
        return $this->resultsInThisPage;
    }

    /**
     * @param  mixed  $resultsInThisPage
     * @return Response
     */
    public function setResultsInThisPage($resultsInThisPage)
    {
        $this->resultsInThisPage = $resultsInThisPage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * @param  mixed  $totalPages
     * @return Response
     */
    public function setTotalPages($totalPages)
    {
        $this->totalPages = $totalPages;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param  mixed  $transactions
     * @return Response
     */
    public function setTransactions($transactions)
    {
        if ($transactions) {
            if (is_object($transactions)) {
                self::addTransactions($transactions);
            } else {
                foreach ($transactions as $transaction) {
                    self::addTransactions($transaction);
                }
            }
        }

        return $this;
    }

    public function addTransactions($transaction)
    {
        //check if is an array of transactions if is just push to array
        if (is_array($transaction)) {
            foreach ($transaction as $item) {
                array_push($this->transactions, $item);
            }

            return;
        }
        //create a new transaction and push to array
        $response = $this->createTransaction($transaction);
        $this->transactions[] = $response;

    }

    private function createTransaction($response)
    {
        $transaction = new Transaction();
        $transaction->setDate(current($response->date))
            ->setCode(current($response->code))
            ->setReference(current($response->reference))
            ->setType(current($response->type))
            ->setStatus(current($response->status))
            ->setLastEventDate(current($response->lastEventDate))
            ->setPaymentMethod($response->paymentMethod)
            ->setGrossAmount(current($response->grossAmount))
            ->setDiscountAmount(current($response->discountAmount))
            ->setNetAmount(current($response->netAmount))
            ->setExtraAmount(current($response->extraAmount))
            ->setCancellationSource(current($response->cancellationSource));

        return $transaction;
    }
}
