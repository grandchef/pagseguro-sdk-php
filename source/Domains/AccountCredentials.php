<?php

namespace PagSeguro\Domains;

use PagSeguro\Domains\Account\Credentials;

/** Class AccountCredentials
 */
class AccountCredentials implements Credentials
{
    private $email;

    private $token;

    /**
     * AccountCredentials constructor.
     *
     * @param  null|string  $email
     * @param  null|string  $token
     */
    public function __construct($email = null, $token = null)
    {
        //Setting e-mail
        if (! is_null($email)) {
            $this->setEmail($email);
        }
        //Setting token
        if (! is_null($token)) {
            $this->setToken($token);
        }
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param  string  $email
     * @return AccountCredentials
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param  string  $token
     * @return AccountCredentials
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributesMap()
    {
        return [
            'email' => $this->getEmail(),
            'token' => $this->getToken(),
        ];
    }

    /**
     * @return string
     */
    public function toString()
    {
        return sprintf(
            'AccountCredentials[ Email : %s , Token: %s ]',
            $this->getEmail(),
            $this->getToken()
        );
    }
}
