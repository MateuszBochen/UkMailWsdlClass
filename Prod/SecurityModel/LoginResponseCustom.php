<?php

namespace UkMail\Prod\SecurityModel;

class LoginResponseCustom
{

    /**
     * @var UKMLoginResponse $LoginResult
     */
    protected $LoginResult = null;

    /**
     * @param UKMLoginResponse $LoginResult
     */
    public function __construct($LoginResult = null)
    {
      $this->LoginResult = $LoginResult;
    }

    /**
     * @return UKMLoginResponse
     */
    public function getLoginResult()
    {
      return $this->LoginResult;
    }

    /**
     * @param UKMLoginResponse $LoginResult
     * @return \UkMail\Prod\SecurityModel\LoginResponse
     */
    public function setLoginResult($LoginResult)
    {
      $this->LoginResult = $LoginResult;
      return $this;
    }

}
