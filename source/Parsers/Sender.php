<?php

namespace PagSeguro\Parsers;

use PagSeguro\Domains\Requests\Requests;
use PagSeguro\Helpers\Characters;
use PagSeguro\Helpers\Mask;

/** Trait Sender
 * @package PagSeguro\Parsers
 */
trait Sender
{
    /**
     * @param Requests $request
     * @param $properties
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];
        // sender
        if (!is_null($request->getSender())) {
            if (!is_null($request->getSender()->getName())) {
                $data[$properties::SENDER_NAME] = $request->getSender()->getName();
            }
            if (!is_null($request->getSender()->getEmail())) {
                $data[$properties::SENDER_EMAIL] = $request->getSender()->getEmail();
            }
            // phone
            if (!is_null($request->getSender()->getPhone())) {
                $data = array_merge($data, self::phone($request, $properties));
            }
            // documents
            if (!is_null($request->getSender()->getDocuments())) {
                $data = array_merge($data, self::documents($request, $properties));
            }
            // ip (only used in direct payments)
            if (method_exists($request->getSender(), 'getIp') && !is_null($request->getSender()->getIp())) {
                $data[$properties::SENDER_IP] = $request->getSender()->getIp();
            }
            // hash (only used in direct payments)
            if (method_exists($request->getSender(), 'getHash') && !is_null($request->getSender()->getHash())) {
                $data[$properties::SENDER_HASH] = $request->getSender()->getHash();
            }
        }
        return $data;
    }

    /**
     * @param $request
     * @param $properties
     * @return array
     */
    private static function phone($request, $properties)
    {
        $data = [];
        if (!is_null($request->getSender()->getPhone()->getAreaCode())) {
            $data[$properties::SENDER_PHONE_AREA_CODE] = $request->getSender()->getPhone()->getAreaCode();
        }
        if (!is_null($request->getSender()->getPhone()->getNumber())) {
            $data[$properties::SENDER_PHONE_NUMBER] = $request->getSender()->getPhone()->getNumber();
        }
        return $data;
    }

    /**
     * @param $payment
     * @param $properties
     * @return array
     */
    private static function documents($payment, $properties)
    {
        $data = [];
        $documents = $payment->getSender()->getDocuments();

        if (is_array($documents) && count($documents) == 1) {
            foreach ($documents as $document) {
                if (!is_null($document)) {
                    $document->getType() == "CPF" ?
                        $data[$properties::SENDER_DOCUMENT_CPF] =
                            Characters::hasSpecialChars($document->getIdentifier()) :
                        $data[$properties::SENDER_DOCUMENT_CNPJ] =
                            Characters::hasSpecialChars($document->getIdentifier());
                }
            }
        }
        return $data;
    }
}
