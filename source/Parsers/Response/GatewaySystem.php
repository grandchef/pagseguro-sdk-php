<?php

namespace PagSeguro\Parsers\Response;

/** Trait GatewaySystem
 * @package PagSeguro\Parsers\Response
 */
trait GatewaySystem
{
    private $gatewaySystem;

    /**
     * @return \PagSeguro\Domains\Responses\GatewaySystem
     */
    public function getGatewaySystem()
    {
        return $this->gatewaySystem;
    }

    /**
     * @param xmlObject $gatewaySystem
     * @return \PagSeguro\Parsers\Response\GatewaySystem
     */
    public function setGatewaySystem($gatewaySystem)
    {
        if ($gatewaySystem) {
            $this->gatewaySystem = new \PagSeguro\Domains\Responses\GatewaySystem();
            $this->gatewaySystem->setAuthorizationCode(current($gatewaySystem->authorizationCode))
                ->setEstablishmentCode(current($gatewaySystem->establishmentCode))
                ->setNormalizedCode(current($gatewaySystem->normalizedCode))
                ->setNormalizedMessage(current($gatewaySystem->normalizedMessage))
                ->setNsu(current($gatewaySystem->nsu))
                ->setRawCode(current($gatewaySystem->rawCode))
                ->setRawMessage(current($gatewaySystem->rawMessage))
                ->setTid(current($gatewaySystem->tid))
                ->setType(current($gatewaySystem->type));
        }
        return $this;
    }
}
