<?php

namespace PagSeguro\Domains\Requests\PreApproval;

use PagSeguro\Domains\Requests\Currency;
use PagSeguro\Domains\Requests\Redirect;
use PagSeguro\Domains\Requests\Reference;
use PagSeguro\Domains\Requests\Requests;
use PagSeguro\Domains\Requests\Review;
use PagSeguro\Domains\Requests\Shipping;

/** Class Request
 */
class Request implements Requests
{
    use Currency;
    use PreApproval;
    use Sender;
    use Shipping;
    use Reference;
    use Redirect {
        Redirect::getUrl as getRedirectUrl;
        Redirect::setUrl as setRedirectUrl;
        Redirect::getUrl insteadof Review;
        Redirect::setUrl insteadof Review;
    }
    use Review {
        Review::getUrl as getReviewUrl;
        Review::setUrl as setReviewUrl;
    }
}
