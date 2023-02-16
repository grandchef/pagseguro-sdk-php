<?php
/**
 * 2007-2016 [PagSeguro Internet Ltda.]
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @author    PagSeguro Internet Ltda.
 * @copyright 2007-2016 PagSeguro Internet Ltda.
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 *
 */

namespace GrandChef\Domains\Requests\Checkout\Payment;

use GrandChef\Domains\Requests\Currency;
use GrandChef\Domains\Requests\Item;
use GrandChef\Domains\Requests\Metadata;
use GrandChef\Domains\Requests\Notification;
use GrandChef\Domains\Requests\Parameter;
use GrandChef\Domains\Requests\PaymentMethod;
use GrandChef\Domains\Requests\PaymentMethod\Accepted;
use GrandChef\Domains\Requests\PreApproval\PreApproval;
use GrandChef\Domains\Requests\Requests;
use GrandChef\Domains\Requests\Review;
use GrandChef\Domains\Requests\Sender;
use GrandChef\Domains\Requests\Shipping;
use GrandChef\Domains\Requests\ReceiverEmail;
use GrandChef\Domains\Requests\Reference;
use GrandChef\Domains\Requests\Redirect;

/**
 * Class Request
 * @package PagSeguro\Domains\Requests
 */
class Request implements Requests
{
    use Accepted {
        Accepted::accept as acceptPaymentMethod;
        Accepted::exclude as excludePaymentMethod;
        Accepted::getAttributeMap as acceptedPaymentMethods;
    }
    use Currency;
    use Item;
    use Metadata;
    use Notification {
        Notification::getUrl as getNotificationUrl;
        Notification::setUrl as setNotificationUrl;
    }
    use Parameter;
    use PaymentMethod;
    use PreApproval;
    use Sender;
    use Shipping;
    use Reference;
    use ReceiverEmail;
    use Redirect {
        Redirect::getUrl as getRedirectUrl;
        Redirect::setUrl as setRedirectUrl;
        Redirect::getUrl insteadof Notification;
        Redirect::setUrl insteadof Notification;
    }
    use Review {
        Review::getUrl as getReviewUrl;
        Review::setUrl as setReviewUrl;
        Review::getUrl insteadof Redirect;
        Review::setUrl insteadof Redirect;
    }
}
