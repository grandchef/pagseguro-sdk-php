<?php

namespace PagSeguro\Parsers\Transaction\OnlineDebit;

use PagSeguro\Parsers\Response\Application;
use PagSeguro\Parsers\Response\CreditorFees;

/** Class Response
 */
class Response extends \PagSeguro\Parsers\Transaction\Response
{
    use Application;
    use CreditorFees;
    use \PagSeguro\Parsers\Response\PaymentLink;
    use \PagSeguro\Parsers\Response\RecoveryCode;
}
