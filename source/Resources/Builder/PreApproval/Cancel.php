<?php

namespace PagSeguro\Resources\Builder\PreApproval;

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
            'preApproval/cancel'
        );
    }
}
