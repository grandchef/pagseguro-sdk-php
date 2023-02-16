<?php

namespace PagSeguro\Resources\Builder;

use PagSeguro\Resources\Builder;

/** Class Payment
 * @package PagSeguro\Resources\Builder
 */
class Notification extends Builder
{

    /**
     * @return string
     */
    public static function getTransactionRequestUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'notification/transaction'
        );
    }

    /**
     * @return string
     */
    public static function getAuthorizationRequestUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'notification/application'
        );
    }

    /**
     * @return string
     */
    public static function getPreApprovalRequestUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'notification/preApproval'
        );
    }
}
