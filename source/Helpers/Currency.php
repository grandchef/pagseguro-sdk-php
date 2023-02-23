<?php

namespace PagSeguro\Helpers;

/** Class Currency
 */
class Currency
{
    /**
     * @return float|string
     */
    public static function toDecimal($value)
    {
        if (is_int($value)) {
            return $value;
        } elseif (is_float($value)) {
            if (strcspn(strrev($value), '.') >= 3) {
                $value = floor($value * 100) / 100;
            }
        }

        return (string) number_format($value, 2, '.', '');
    }
}
