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

namespace GrandChef\Services\DirectPreApproval;

use GrandChef\Domains\Account\Credentials;
use GrandChef\Domains\Requests\DirectPreApproval\Query;
use GrandChef\Parsers\DirectPreApproval\QueryParsers;
use GrandChef\Resources\Connection;
use GrandChef\Resources\Http;
use GrandChef\Resources\Log\Logger;
use GrandChef\Resources\Responsibility;

/**
 * Class QueryService
 *
 * @package PagSeguro\Services\DirectPreApproval
 */
class QueryService
{
    /**
     * @param Credentials $credentials
     * @param Query       $directPreApproval
     *
     * @return mixed
     * @throws \Exception
     */
    public static function create(Credentials $credentials, Query $directPreApproval)
    {
        Logger::info("Begin", ['service' => 'DirectPreApproval']);
        try {
            $connection = new Connection\Data($credentials);
            $http = new Http('Content-Type: application/json;', 'Accept: application/vnd.pagseguro.com.br.v3+json;charset=ISO-8859-1');
            Logger::info(sprintf("POST: %s", self::request($connection)), ['service' => 'DirectPreApproval']);
            Logger::info(
                sprintf(
                    "Params: %s",
                    json_encode(QueryParsers::getData($directPreApproval))
                ),
                ['service' => 'DirectPreApproval']
            );
            $http->get(
                self::request($connection, QueryParsers::getData($directPreApproval), $directPreApproval->preApprovalCode),
                20,
                \GrandChef\Configuration\Configure::getCharset()->getEncoding()
            );
            $response = Responsibility::http(
                $http,
                new QueryParsers
            );
            Logger::info(
                sprintf("DirectPreApproval URL: %s", json_encode(self::response($response))),
                ['service' => 'DirectPreApproval']
            );

            return self::response($response);
        } catch (\Exception $exception) {
            Logger::error($exception->getMessage(), ['service' => 'DirectPreApproval']);
            throw $exception;
        }
    }

    /**
     * @param Connection\Data $connection
     * @param null            $params
     *
     * @return string
     */
    private static function request(Connection\Data $connection, $params = null, $preApprovalCode = null)
    {
        if ($preApprovalCode) {
            return $connection->buildDirectPreApprovalQueryRequestUrl() . '/' . $preApprovalCode . "?" . $connection->buildCredentialsQuery();
        }

        return $connection->buildDirectPreApprovalQueryRequestUrl() . "?" . $connection->buildCredentialsQuery() . ($params ? '&' . $params : '');
    }

    /**
     * @param $response
     *
     * @return mixed
     */
    private static function response($response)
    {
        return $response;
    }
}
