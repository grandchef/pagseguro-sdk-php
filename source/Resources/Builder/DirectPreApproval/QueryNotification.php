<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class QueryNotification
 *
 * @package PagSeguro\Resources\Builder\DirectPreApproval
 */
class QueryNotification extends Builder
{
    /**
     * @return string
     */
    public static function getQueryNotificationUrl()
    {
        return parent::getRequest(parent::getUrl('webservice'), 'directPreApproval/queryNotification');
    }
}
