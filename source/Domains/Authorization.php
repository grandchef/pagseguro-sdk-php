<?php

namespace PagSeguro\Domains;

use PagSeguro\Domains\Authorization\Account;

class Authorization
{
    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $permissions;

    /**
     * @var string
     */
    private $redirectURL;

    /**
     * @var string
     */
    private $notificationURL;

    /**
     * @var Authorization\Account
     */
    private $account;

    /**
     * Seller constructor.
     *
     * @param  Account  $account
     */
    public function __construct(
        $reference,
        $permissions,
        $redirectURL,
        $notificationURL,
        Account $account = null
    ) {
        $this->reference = $reference;
        $this->permissions = $permissions;
        $this->redirectURL = $redirectURL;
        $this->notificationURL = $notificationURL;
        $this->account = $account;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return mixed
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @return mixed
     */
    public function getRedirectURL()
    {
        return $this->redirectURL;
    }

    /**
     * @return mixed
     */
    public function getNotificationURL()
    {
        return $this->notificationURL;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }
}
