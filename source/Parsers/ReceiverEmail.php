<?php

namespace PagSeguro\Parsers;

use PagSeguro\Domains\Requests\Requests;

/** Trait ReceiverEmail
 */
trait ReceiverEmail
{
    /**
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];

        if (! is_null($request->getReceiverEmail())) {
            $data[$properties::RECEIVER_EMAIL] = $request->getReceiverEmail();
        }

        return $data;
    }
}
