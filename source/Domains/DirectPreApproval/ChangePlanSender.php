<?php

namespace PagSeguro\Domains\DirectPreApproval;

/** Class ChangePlanSender
 *
 */
class ChangePlanSender
{
    public $ip;

    public $hash;

    /**
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }
}
