<?php

namespace PagSeguro\Parsers;

use PagSeguro\Domains\Requests\Requests;

/** Trait ReceiverEmail
 * @package PagSeguro\Parsers
 */
trait ReceiverEmail
{
    /**
     * @param Requests $request
     * @param $properties
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];

        if (!is_null($request->getReceiverEmail())) {
            $data[$properties::RECEIVER_EMAIL] = $request->getReceiverEmail();
        }
        return $data;
    }
}
