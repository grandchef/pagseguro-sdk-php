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

namespace GrandChef\Parsers\PreApproval;

use GrandChef\Domains\Requests\Requests;
use GrandChef\Enum\Properties\Current;
use GrandChef\Parsers\Basic;
use GrandChef\Parsers\Currency;
use GrandChef\Parsers\Error;
use GrandChef\Parsers\Parser;
use GrandChef\Parsers\PreApproval;
use GrandChef\Parsers\Sender;
use GrandChef\Resources\Http;

/**
 * Class Request
 * @package PagSeguro\Parsers\PreApproval
 */
class Request extends Error implements Parser
{
    use Basic;
    use Currency;
    use Sender;

    /**
     * @param Requests $request
     * @return array
     */
    public static function getData(Requests $request)
    {
        $data = [];
        $properties = new Current;
        return array_merge(
            $data,
            Basic::getData($request, $properties),
            Currency::getData($request, $properties),
            PreApproval::getData($request, $properties),
            Sender::getData($request, $properties)
        );
    }

    /**
     * @param Http $http
     * @return mixed|Response
     */
    public static function success(Http $http)
    {
        $xml = simplexml_load_string($http->getResponse());
        return (new Response)->setCode(current($xml->code))
            ->setDate(current($xml->date));
    }

    /**
     * @param Http $http
     * @return mixed|\PagSeguro\Domains\Error
     */
    public static function error(Http $http)
    {
        $error = parent::error($http);
        return $error;
    }
}
