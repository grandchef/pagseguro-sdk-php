<?php

namespace PagSeguro\Parsers\DirectPayment\CreditCard;

/** Request from the Credit Card direct payment
 */

use PagSeguro\Enum\Properties\Current;
use PagSeguro\Parsers\Basic;
use PagSeguro\Parsers\Currency;
use PagSeguro\Parsers\DirectPayment\Mode;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Item;
use PagSeguro\Parsers\Parameter;
use PagSeguro\Parsers\Parser;
use PagSeguro\Parsers\ReceiverEmail;
use PagSeguro\Parsers\Sender;
use PagSeguro\Parsers\Shipping;
use PagSeguro\Parsers\Transaction\CreditCard\Response;
use PagSeguro\Resources\Http;

/** Class Request
 */
class Request extends Error implements Parser
{
    use Basic;
    use Currency;
    use Holder;
    use Installment;
    use Item;
    use Method;
    use Mode;
    use Parameter;
    use ReceiverEmail;
    use Sender;
    use Shipping;

    /**
     * @return array
     */
    public static function getData(\PagSeguro\Domains\Requests\DirectPayment\CreditCard $creditCard)
    {
        $data = [];
        $properties = new Current();

        return array_merge(
            $data,
            Basic::getData($creditCard, $properties),
            Billing::getData($creditCard, $properties),
            Currency::getData($creditCard, $properties),
            Holder::getData($creditCard, $properties),
            Installment::getData($creditCard, $properties),
            Item::getData($creditCard, $properties),
            Method::getData($properties),
            Mode::getData($creditCard, $properties),
            Parameter::getData($creditCard),
            ReceiverEmail::getData($creditCard, $properties),
            Sender::getData($creditCard, $properties),
            Shipping::getData($creditCard, $properties),
            Token::getData($creditCard, $properties)
        );
    }

    /**
     * @return Response
     */
    public static function success(Http $http)
    {
        $xml = simplexml_load_string($http->getResponse());

        return (new Response)->setCancelationSource(current($xml->cancelationSource))
            ->setCode(current($xml->code))
            ->setDate(current($xml->date))
            ->setDiscountAmount(current($xml->discountAmount))
            ->setExtraAmount(current($xml->extraAmount))
            ->setEscrowEndDate(current($xml->escrowEndDate))
            ->setFeeAmount(current($xml->feeAmount))
            ->setGatewaySystem($xml->gatewaySystem)
            ->setGrossAmount(current($xml->grossAmount))
            ->setInstallmentCount(current($xml->installmentCount))
            ->setItemCount(current($xml->itemCount))
            ->setItems($xml->items)
            ->setLastEventDate(current($xml->lastEventDate))
            ->setNetAmount(current($xml->netAmount))
            ->setPaymentMethod($xml->paymentMethod)
            ->setReference(current($xml->reference))
            ->setSender($xml->sender)
            ->setShipping($xml->shipping)
            ->setStatus(current($xml->status))
            ->setCreditorFees($xml->creditorFees)
            ->setApplication($xml->applications)
            ->setType(current($xml->type));
    }

    /**
     * @return \PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        return parent::error($http);
    }
}
