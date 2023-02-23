<?php

namespace PagSeguro\Resources\Framework;

/** Class Language
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
