<?php

namespace PagSeguro\Enum;

/** Class Notification
 * @package PagSeguro\Enum
 */
class Notification extends Enum
{
    /**
     *
     */
    const TRANSACTION = 'transaction';

    /**
     *
     */
    const APPLICATION_AUTHORIZATION = 'applicationAuthorization';

    /**
     *
     */
    const PRE_APPROVAL = 'preApproval';
}
