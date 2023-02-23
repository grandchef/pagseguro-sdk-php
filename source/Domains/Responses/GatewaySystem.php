<?php

namespace PagSeguro\Domains\Responses;

/** Class PaymentMethod
 */
class GatewaySystem
{
    private $type;

    private $rawCode;

    private $rawMessage;

    private $normalizedCode;

    private $normalizedMessage;

    private $authorizationCode;

    private $nsu;

    private $tid;

    private $establishmentCode;

    public function getNsu()
    {
        return $this->nsu;
    }

    public function getTid()
    {
        return $this->tid;
    }

    public function setNsu($nsu)
    {
        $this->nsu = $nsu;

        return $this;
    }

    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getRawCode()
    {
        return $this->rawCode;
    }

    public function getRawMessage()
    {
        return $this->rawMessage;
    }

    public function getNormalizedCode()
    {
        return $this->normalizedCode;
    }

    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    public function getEstablishmentCode()
    {
        return $this->establishmentCode;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function setRawCode($rawCode)
    {
        $this->rawCode = $rawCode;

        return $this;
    }

    public function setRawMessage($rawMessage)
    {
        $this->rawMessage = $rawMessage;

        return $this;
    }

    public function setNormalizedCode($normalizedCode)
    {
        $this->normalizedCode = $normalizedCode;

        return $this;
    }

    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;

        return $this;
    }

    public function setEstablishmentCode($establishmentCode)
    {
        $this->establishmentCode = $establishmentCode;

        return $this;
    }

    public function getNormalizedMessage()
    {
        return $this->normalizedMessage;
    }

    public function setNormalizedMessage($normalizedMessage)
    {
        $this->normalizedMessage = $normalizedMessage;

        return $this;
    }
}
