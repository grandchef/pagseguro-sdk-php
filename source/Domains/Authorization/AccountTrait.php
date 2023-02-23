<?php

namespace PagSeguro\Domains\Authorization;

trait AccountTrait
{
    /**
     * @var Account
     */
    private $account;

    /**
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    public function setAccount(Account $account)
    {
        $this->account = $account;
    }
}
