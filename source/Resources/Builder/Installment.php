<?php

namespace PagSeguro\Resources\Builder;

use PagSeguro\Resources\Builder;

/** Installment
 *
 */
class Installment extends Builder
{
    /**
     * Class Installment
     *
     * @return string
     */
    public static function getRequestUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'installment'
        );
    }
}
