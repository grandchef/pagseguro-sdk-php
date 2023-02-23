<?php

namespace PagSeguro\Resources\Factory\Request;

use PagSeguro\Enum\Properties\Current;

/** Class PaymentMethod
 */
class PaymentMethod
{
    private $paymentMethod = [];

    public function instance(\PagSeguro\Domains\PaymentMethod $paymentMethod)
    {
        return $paymentMethod;
    }

    public function withArray($array)
    {
        $properties = new Current;

        $paymentMethod = new \PagSeguro\Domains\PaymentMethod();
        $paymentMethod->setKey($array[$properties::PAYMENT_METHOD_CONFIG_KEY])
            ->setValue($array[$properties::PAYMENT_METHOD_CONFIG_VALUE])
            ->setGroup($array[$properties::PAYMENT_METHOD_GROUP]);

        array_push($this->paymentMethod, $paymentMethod);

        return $this->paymentMethod;
    }

    public function withParameters(
        $group,
        $key,
        $value
    ) {
        $paymentMethod = new \PagSeguro\Domains\PaymentMethod();
        $paymentMethod->setKey($key)
            ->setValue($value)
            ->setGroup($group);
        array_push($this->paymentMethod, $paymentMethod);

        return $this->paymentMethod;
    }
}
