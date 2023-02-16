<?php

namespace PagSeguro\Domains\Requests;

use PagSeguro\Helpers\InitializeObject;

trait PaymentMethod
{
    private $paymentMethod = array();
    
    public function addPaymentMethod()
    {
        $this->paymentMethod = InitializeObject::Initialize(
            $this->paymentMethod,
            new \PagSeguro\Resources\Factory\Request\PaymentMethod()
        );
        
        return $this->paymentMethod;
    }

    public function setPaymentMethod($paymentMethod)
    {
        if (is_array($paymentMethod)) {
            $arr = array();
            foreach ($paymentMethod as $key => $method) {
                if ($method instanceof \PagSeguro\Domains\PaymentMethod) {
                    $arr[$key] = $method;
                } else {
                    if (is_array($paymentMethod)) {
                        $arr[$key] = new \PagSeguro\Domains\PaymentMethod($method);
                    }
                }
            }
            $this->paymentMethod = $arr;
        }
    }

    public function getPaymentMethod()
    {
        return current($this->paymentMethod);
    }

    public function paymentMethodLenght()
    {
        return count((array) $this->paymentMethod);
    }
}
