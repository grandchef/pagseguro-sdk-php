<?php

namespace PagSeguro\Domains\Requests\PreApproval\Charge;

use PagSeguro\Domains\Requests\Item;
use PagSeguro\Domains\Requests\Reference;
use PagSeguro\Domains\Requests\Requests;

/** Class Request
 */
class Request implements Requests
{
    use Reference;
    use Item;
}
