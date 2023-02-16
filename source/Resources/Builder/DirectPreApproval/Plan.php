<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Plan
 *
 * @package PagSeguro\Resources\Builder\DirectPreApproval
 */
class Plan extends Builder
{
    /**
     * @return string
     */
    public static function getPlanUrl()
    {
        return parent::getRequest(parent::getUrl('webservice'), 'directPreApproval/plan');
    }
}
