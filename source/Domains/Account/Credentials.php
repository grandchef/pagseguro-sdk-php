<?php

namespace PagSeguro\Domains\Account;

/** Interface Credentials
 * @package PagSeguro\Domains\Credentials
 */
interface Credentials
{
    /**
     * @return array
     */
    public function getAttributesMap();

    /**
     * @return string
     */
    public function toString();
}
