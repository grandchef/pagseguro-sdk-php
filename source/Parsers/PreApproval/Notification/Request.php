<?php

namespace PagSeguro\Parsers\PreApproval\Notification;

use PagSeguro\Domains\Address;
use PagSeguro\Domains\Phone;
use PagSeguro\Domains\PreApproval\Sender;
use PagSeguro\Parsers\Error;
use PagSeguro\Parsers\Parser;
use PagSeguro\Parsers\PreApproval\Search\Code\Response;
use PagSeguro\Resources\Http;

/** Class Request
 */
class Request extends Error implements Parser
{
    /**
     * @return Response
     */
    public static function success(Http $http)
    {
        $xml = simplexml_load_string($http->getResponse());

        $response = new Response();
        $response->setName(current($xml->name))
            ->setCode(current($xml->code))
            ->setDate(current($xml->date))
            ->setTracker(current($xml->tracker))
            ->setStatus(current($xml->status))
            ->setReference(current($xml->reference))
            ->setLastEventDate(current($xml->lastEventDate))
            ->setCharge(current($xml->charge))
            ->setSender(
                (new Sender)->setName(current($xml->sender->name))
                    ->setEmail(current($xml->sender->email))
                    ->setPhone(
                        (new Phone)->setAreaCode(current($xml->sender->phone->areaCode))
                            ->setNumber(current($xml->sender->phone->areaCode))
                    )->setAddress(
                        (new Address)->setStreet(current($xml->sender->address->street))
                            ->setNumber(current($xml->sender->address->number))
                            ->setComplement(current($xml->sender->address->complement))
                            ->setDistrict(current($xml->sender->address->district))
                            ->setCity(current($xml->sender->address->city))
                            ->setState(current($xml->sender->address->state))
                            ->setCountry(current($xml->sender->address->country))
                            ->setPostalCode(current($xml->sender->address->postalCode))
                    )
            );

        return $response;
    }

    /**
     * @return \PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        $error = parent::error($http);

        return $error;
    }
}
