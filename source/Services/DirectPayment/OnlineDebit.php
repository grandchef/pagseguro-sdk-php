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

namespace GrandChef\Services\DirectPayment;

use GrandChef\Domains\Account\Credentials;
use GrandChef\Helpers\Crypto;
use GrandChef\Helpers\Mask;
use GrandChef\Parsers\DirectPayment\OnlineDebit\Request;
use GrandChef\Resources\Connection;
use GrandChef\Resources\Http;
use GrandChef\Resources\Log\Logger;
use GrandChef\Resources\Responsibility;

/**
 * Class Payment
 * @package PagSeguro\Services\DirectPayment
 */
class OnlineDebit
{
    /**
     * @param \GrandChef\Domains\Account\Credentials $credentials
     * @param \GrandChef\Domains\Requests\DirectPayment\OnlineDebit $payment
     * @return string
     * @throws \Exception
     */
    public static function checkout(
        Credentials $credentials,
        \GrandChef\Domains\Requests\DirectPayment\OnlineDebit $payment
    )
    {
        Logger::info("Begin", ['service' => 'DirectPayment.OnlineDebit']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http();
            Logger::info(
                sprintf("POST: %s", self::request($connection)),
                ['service' => 'DirectPayment.OnlineDebit']
            );
            Logger::info(
                sprintf(
                    "Params: %s",
                    json_encode(Crypto::encrypt(Request::getData($payment)))
                ),
                ['service' => 'Checkout']
            );
            $http->post(
                self::request($connection),
                Request::getData($payment),
                20,
                \GrandChef\Configuration\Configure::getCharset()->getEncoding()
            );

            $response = Responsibility::http(
                $http,
                new Request
            );

            Logger::info(
                sprintf("Online Debit Payment Link URL: %s", $response->getPaymentLink()),
                ['service' => 'DirectPayment.OnlineDebit']
            );

            return $response;
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'DirectPayment.OnlineDebit']);
            throw $exception;
        }
    }

    /**
     * @param Connection\Data $connection
     * @return string
     */
    private static function request(Connection\Data $connection)
    {
        return $connection->buildDirectPaymentRequestUrl() . "?" . $connection->buildCredentialsQuery();
    }
}
