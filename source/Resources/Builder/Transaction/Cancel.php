<?php

namespace PagSeguro\Resources\Builder\Transaction;

use PagSeguro\Resources\Builder;

/** Class Payment
 */
class Cancel extends Builder
{
    /**
     * @return string
     */
    public static function getCancelUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'cancel'
        );
    }
}
