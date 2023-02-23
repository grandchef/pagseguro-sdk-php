<?php

namespace PagSeguro\Enum;

/** Class Mask
 */
class Mask extends Enum
{
    /**
     * Mask for CPF
     */
    const CPF = '999.***.***-**';

    /**
     * Mask for RG
     */
    const RG = '99.999.***-**';

    /**
     * Mask for Birth Date
     */
    const BIRTH_DATE = '**/**/9999';

    /**
     * Mask for Phone
     */
    const PHONE = '(**) 9999-****';

    /**
     * Mask for Mobile
     */
    const MOBILE = '(**) 99999-****';
}
