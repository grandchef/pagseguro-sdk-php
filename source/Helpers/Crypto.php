<?php

namespace PagSeguro\Helpers;

class Crypto
{
    private static $list = [
        "senderPhone" => array("phone", \PagSeguro\Enum\Mask::PHONE),
        "senderCPF" => array("cpf", \PagSeguro\Enum\Mask::CPF)
    ];

    public static function encrypt($parameters)
    {
        foreach (self::$list as $param => $value) {
            if (array_key_exists($param, $parameters)) {
                $parameters[$param] = Mask::{current($value)}($parameters[$param], ["type" => end($value)]);
            }
        }
        return $parameters;
    }
}
