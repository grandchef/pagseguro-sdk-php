<?php

namespace PagSeguro\Resources\Connection\Base;

/** Class Credentials
 * @package PagSeguro\Services\Connection\Base
 */
trait Credentials
{

    /**
     * @var
     */
    private $credentials;

    /**
     * @return \PagSeguro\Domains\Account\Credentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param \PagSeguro\Domains\Account\Credentials $credentials
     * @return Credentials
     */
    public function setCredentials(\PagSeguro\Domains\Account\Credentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function buildCredentialsQuery()
    {
        return http_build_query($this->credentials->getAttributesMap(), '', '&');
    }
}
