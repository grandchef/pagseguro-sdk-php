<?php

namespace PagSeguro\Enum\Authorization;

use PagSeguro\Enum\Enum;

/** Class Permissions
 */
class Permissions extends Enum
{
    const CREATE_CHECKOUTS = 'CREATE_CHECKOUTS';

    const RECEIVE_TRANSACTION_NOTIFICATIONS = 'RECEIVE_TRANSACTION_NOTIFICATIONS';

    const SEARCH_TRANSACTIONS = 'SEARCH_TRANSACTIONS';

    const MANAGE_PAYMENT_PRE_APPROVALS = 'MANAGE_PAYMENT_PRE_APPROVALS';

    const DIRECT_PAYMENT = 'DIRECT_PAYMENT';
}
