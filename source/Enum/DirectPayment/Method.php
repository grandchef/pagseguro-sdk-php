<?php

namespace PagSeguro\Enum\DirectPayment;

/** Lists all the available payment methods for direct payment
 *
 */
class Method
{
    const BOLETO = 'boleto';

    const CREDIT_CARD = 'creditCard';

    const ONLINE_DEBIT = 'eft';
}
