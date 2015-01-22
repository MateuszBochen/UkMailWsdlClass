<?php

namespace UkMail\Prod\SecurityModel;

class UKMLoginResponseCustom extends UKMWebResponseCustom
{

    /**
     * @var ArrayOfAccountWebModel $Accounts
     */
    protected $Accounts = null;

    /**
     * @var string $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @param UKMResultState $Result
     */
    public function __construct($Result = null)
    {
      parent::__construct($Result);
    }

    /**
     * @return ArrayOfAccountWebModel
     */
    public function getAccounts()
    {
      return $this->Accounts;
    }

    /**
     * @param ArrayOfAccountWebModel $Accounts
     * @return \UkMail\Prod\SecurityModel\UKMLoginResponse
     */
    public function setAccounts($Accounts)
    {
      $this->Accounts = $Accounts;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticationToken()
    {
      return $this->AuthenticationToken;
    }

    /**
     * @param string $AuthenticationToken
     * @return \UkMail\Prod\SecurityModel\UKMLoginResponse
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

}
