<?php

namespace PagSeguro\Parsers\DirectPayment\Boleto;

/** Request from the Boleto direct payment
 *
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
use PagSeguro\Parsers\Transaction\Boleto\Response;
use PagSeguro\Resources\Http;

/** Class Request
 */
class Request extends Error implements Parser
{
    use Basic;
    use Currency;
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
    public static function getData(\PagSeguro\Domains\Requests\DirectPayment\Boleto $boleto)
    {
        $data = [];

        $properties = new Current();

        return array_merge(
            $data,
            Basic::getData($boleto, $properties),
            Currency::getData($boleto, $properties),
            Item::getData($boleto, $properties),
            Method::getData($properties),
            Mode::getData($boleto, $properties),
            Parameter::getData($boleto),
            ReceiverEmail::getData($boleto, $properties),
            Sender::getData($boleto, $properties),
            Shipping::getData($boleto, $properties)
        );
    }

    /**
     * @return Response
     */
    public static function success(Http $http)
    {
        $xml = simplexml_load_string($http->getResponse());

        return (new Response)->setDate(current($xml->date))
            ->setCode(current($xml->code))
            ->setReference(current($xml->reference))
            ->setType(current($xml->type))
            ->setStatus(current($xml->status))
            ->setLastEventDate(current($xml->lastEventDate))
            ->setCancelationSource(current($xml->cancelationSource))
            ->setCreditorFees($xml->creditorFees)
            ->setPaymentLink(current($xml->paymentLink))
            ->setPaymentMethod($xml->paymentMethod)
            ->setGrossAmount(current($xml->grossAmount))
            ->setDiscountAmount(current($xml->discountAmount))
            ->setFeeAmount(current($xml->feeAmount))
            ->setNetAmount(current($xml->netAmount))
            ->setExtraAmount(current($xml->extraAmount))
            ->setEscrowEndDate(current($xml->escrowEndDate))
            ->setInstallmentCount(current($xml->installmentCount))
            ->setItemCount(current($xml->itemCount))
            ->setItems($xml->items)
            ->setSender($xml->sender)
            ->setShipping($xml->shipping)
            ->setApplication($xml->applications);
    }

    /**
     * @return \PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        return parent::error($http);
    }
}
