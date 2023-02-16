<?php

namespace PagSeguro\Resources\Framework;

/** Class Language
 * @package PagSeguro\Resources\Framework
 */
class Language
{
    /**
     * @return string
     */
    public function getRelease()
    {
        return phpversion();
    }
}
