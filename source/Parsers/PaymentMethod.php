<?php

namespace PagSeguro\Parsers;

use PagSeguro\Domains\Requests\Requests;

/** Trait PaymentMethod
 */
trait PaymentMethod
{
    /**
     * @return array
     */
    public static function getData(Requests $request, $properties)
    {
        $data = [];
        $paymentMethod = $request->getPaymentMethod();
        if ($request->paymentMethodLenght() > 0) {
            $count = 0;

            foreach ($paymentMethod as $key => $value) {
                $count++;
                if (! is_null($paymentMethod[$key]->getGroup())) {
                    $data[sprintf($properties::PAYMENT_METHOD_GROUP, $count)] = $paymentMethod[$key]->getGroup();
                }
                if (! is_null($paymentMethod[$key]->getKey())) {
                    $data[sprintf($properties::PAYMENT_METHOD_CONFIG_KEY, $count, 1)] = $paymentMethod[$key]->getKey();
                }
                if (! is_null($paymentMethod[$key]->getValue())) {
                    $data[sprintf($properties::PAYMENT_METHOD_CONFIG_VALUE, $count, 1)] =
                        \PagSeguro\Helpers\Currency::toDecimal($paymentMethod[$key]->getValue());
                }
            }
        }

        return $data;
    }
}
