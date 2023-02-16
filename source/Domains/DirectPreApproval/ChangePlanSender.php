<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class ChangePlanSender
 *
 * @package PagSeguro\Domains\DirectPreApproval
 */
class ChangePlanSender
{
    /**
     * @var
     */
    public $ip;
    /**
     * @var
     */
    public $hash;

    /**
     * @param $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @param $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }
}