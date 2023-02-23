<?php

namespace PagSeguro\Resources\Builder\DirectPreApproval;

use PagSeguro\Resources\Builder;

/** Class Accession
 *
 */
class Accession extends Builder
{
    /**
     * @return string
     */
    public static function getAccessionUrl()
    {
        return parent::getRequest(
            parent::getUrl('webservice'),
            'directPreApproval/accession'
        );
    }
}
