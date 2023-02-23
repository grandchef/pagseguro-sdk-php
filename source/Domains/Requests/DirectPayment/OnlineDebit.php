<?php

namespace PagSeguro\Domains\Requests\DirectPayment;

use PagSeguro\Domains\Requests\DirectPayment\OnlineDebit\Request;

/** Class Payment
 */
class OnlineDebit extends Request
{
    /**
     * @var string bank name
     */
    private $bankName;

    /**
     * @return string bank name
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @return $this
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * @return string
     *
     * @throws \Exception
     */
    public function register($credentials)
    {
        return \PagSeguro\Services\DirectPayment\OnlineDebit::checkout($credentials, $this);
    }
}
