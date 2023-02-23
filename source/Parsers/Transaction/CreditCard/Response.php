<?php

namespace PagSeguro\Parsers\Transaction\CreditCard;

use PagSeguro\Parsers\Response\Application;
use PagSeguro\Parsers\Response\CreditorFees;

/** Class Response
 */
class Response extends \PagSeguro\Parsers\Transaction\Response
{
    use Application;
    use CreditorFees;
    use \PagSeguro\Parsers\Response\GatewaySystem;
}
