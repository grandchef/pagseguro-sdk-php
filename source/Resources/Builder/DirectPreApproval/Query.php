<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Query
 *
 */
class Query extends Builder
{
    /**
     * @return string
     */
    public static function getQueryUrl()
    {
        return parent::getRequest(parent::getUrl('webservice'), 'directPreApproval/query');
    }
}
