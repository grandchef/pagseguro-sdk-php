<?php

namespace PagSeguro\Domains\Requests\PreApproval\Charge;

use PagSeguro\Domains\Requests\Currency;
use PagSeguro\Domains\Requests\Item;
use PagSeguro\Domains\Requests\Metadata;
use PagSeguro\Domains\Requests\Notification;
use PagSeguro\Domains\Requests\Parameter;
use PagSeguro\Domains\Requests\PaymentMethod;
use PagSeguro\Domains\Requests\Requests;
use PagSeguro\Domains\Requests\Shipping;
use PagSeguro\Domains\Requests\Reference;
use PagSeguro\Domains\Requests\Redirect;

/** Class Request
 * @package PagSeguro\Domains\Requests
 */
class Request implements Requests
{
    use Reference;
    use Item;
}
