<?php

namespace PagSeguro\Parsers\Transaction\CreditCard;

use PagSeguro\Parsers\Response\Application;
use PagSeguro\Parsers\Response\CreditorFees;

/** Class Response
 * @package PagSeguro\Parsers\Transaction\CreditCard
 */
class Response extends \PagSeguro\Parsers\Transaction\Response
{
    use Application;
    use CreditorFees;
    use \PagSeguro\Parsers\Response\GatewaySystem;
}
