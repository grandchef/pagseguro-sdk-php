<?php

namespace PagSeguro\Domains\Account;

/** Interface Credentials
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
