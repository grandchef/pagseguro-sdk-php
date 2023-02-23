<?php

namespace PagSeguro\Domains;

use PagSeguro\Domains\Account\Credentials;

/** Class ApplicationCredentials
 */
class ApplicationCredentials implements Credentials
{
    private $appId;

    private $appKey;

    private $authorizationCode;

    /**
     * ApplicationCredentials constructor.
     *
     * @param  null  $appId
     * @param  null  $appKey
     */
    public function __construct($appId = null, $appKey = null)
    {
        //Setting app id
        if (! is_null($appId)) {
            $this->setAppId($appId);
        }
        //Setting app key
        if (! is_null($appKey)) {
            $this->setAppKey($appKey);
        }
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * @param  mixed  $authorizationCode
     * @return ApplicationCredentials
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributesMap()
    {
        return [
            'appId' => $this->getAppId(),
            'appKey' => $this->getAppKey(),
            'authorizationCode' => $this->getAuthorizationCode(),
        ];
    }

    /**
     * @return string
     */
    public function toString()
    {
        return sprintf(
            'ApplicationCredentials[ Email : %s , Token: %s ]',
            $this->getAppId(),
            $this->getAppKey()
        );
    }
}
