<?php

namespace PagSeguro\Parsers\DirectPayment;

use PagSeguro\Domains\Requests\Requests;

/** Class Mode
 */
trait Mode
{
    /**
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];
        // Payment mode
        if (! is_null($request->getMode())) {
            $data[$properties::DIRECT_PAYMENT_MODE] = $request->getMode();
        }

        return $data;
    }
}
