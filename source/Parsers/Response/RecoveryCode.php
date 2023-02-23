<?php

namespace PagSeguro\Parsers\Response;

/** Trait RecoveryCode
 */
trait RecoveryCode
{
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
