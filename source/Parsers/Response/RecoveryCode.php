<?php

namespace PagSeguro\Parsers\Response;

/** Trait RecoveryCode
 * @package PagSeguro\Parsers\Response
 */
trait RecoveryCode
{
    /**
     * @var
     */
    private $recoveryCode;

    public function getRecoveryCode()
    {
        return $this->recoveryCode;
    }

    public function setRecoveryCode($recoveryCode)
    {
        $this->recoveryCode = $recoveryCode;
        return $this;
    }
}
