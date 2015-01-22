<?php

namespace UkMail\Test\SecurityModel;

class LoginCustom2
{

    /**
     * @var LoginWebRequest $loginWebRequest
     */
    protected $loginWebRequest = null;

    /**
     * @param LoginWebRequest $loginWebRequest
     */
    public function __construct($loginWebRequest = null)
    {
      $this->loginWebRequest = $loginWebRequest;
    }

    /**
     * @return LoginWebRequest
     */
    public function getLoginWebRequest()
    {
      return $this->loginWebRequest;
    }

    /**
     * @param LoginWebRequest $loginWebRequest
     * @return \UkMail\Test\SecurityModel\Login
     */
    public function setLoginWebRequest($loginWebRequest)
    {
      $this->loginWebRequest = $loginWebRequest;
      return $this;
    }

}
