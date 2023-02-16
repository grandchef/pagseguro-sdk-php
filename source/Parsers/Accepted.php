<?php

namespace PagSeguro\Parsers;

use PagSeguro\Domains\Requests\Requests;

/** Trait Accepted
 * @package PagSeguro\Parsers
 */
trait Accepted
{
    public static function getData(Requests $request, $properties)
    {
        $data = [];
        if (!is_null($request->acceptedPaymentMethods())) {
            $accepted = $request->acceptedPaymentMethods();
            if (!is_null($accepted['accept'])) {
                $data[$properties::ACCEPT_PAYMENT_METHOD_GROUP] =
                    implode(',', current($accepted['accept'])->getGroups());
                if (!is_null(current($accepted['accept'])->getNames())) {
                    $data[$properties::ACCEPT_PAYMENT_METHOD_NAME] =
                        implode(',', current($accepted['accept'])->getNames());
                }
            }
            if (!is_null($accepted['exclude'])) {
                $data[$properties::EXCLUDE_PAYMENT_METHOD_GROUP] =
                    implode(',', current($accepted['exclude'])->getGroups());
                if (!is_null(current($accepted['exclude'])->getNames())) {
                    $data[$properties::EXCLUDE_PAYMENT_METHOD_NAME] =
                        implode(',', current($accepted['exclude'])->getNames());
                }
            }
        }
        return $data;
    }
}
