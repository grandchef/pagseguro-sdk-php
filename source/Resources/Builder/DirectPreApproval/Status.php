<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Status
 *
 */
class Status extends Builder
{
    /**
     * @return string
     */
    public static function getStatusUrl()
    {
        return parent::getRequest(parent::getUrl('webservice'), 'directPreApproval/query');
    }
}
