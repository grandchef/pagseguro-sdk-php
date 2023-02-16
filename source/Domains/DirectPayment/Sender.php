<?php

namespace PagSeguro\Domains\DirectPayment;

/** Direct Payment Sender
 *
 * @package PagSeguro\Domains\Requests\DirectPayment
 */
class Sender extends \PagSeguro\Domains\Sender
{
    /**
     * @var
     */
    private $ip;

    /**
     * @var
     */
    private $hash;

    /**
     * Sender constructor.
     */
    public function __construct()
    {
        parent::__construct();
        return $this;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return Sender
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }
}
