<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Cancel
 *
 * @package PagSeguro\Resources\Builder\DirectPreApproval
 */
class Cancel extends Builder
{
    /**
     * @return string
     */
    public static function getCancelUrl()
    {
        return parent::getRequest(parent::getUrl('webservice'), 'directPreApproval/cancel');
    }
}
