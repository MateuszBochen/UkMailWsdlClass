<?php

namespace UkMail\Prod\SecurityModel;

class AccountWebModelCustom
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var AccountStatusEnum $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var AccountTypeEnum $AccountType
     */
    protected $AccountType = null;

    /**
     * @var string $AlternativeRefAlias
     */
    protected $AlternativeRefAlias = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $ContactNumber
     */
    protected $ContactNumber = null;

    /**
     * @var string $CustomerRefAlias
     */
    protected $CustomerRefAlias = null;

    /**
     * @var string $Postcode
     */
    protected $Postcode = null;

    /**
     * @var RegionEnum $Region
     */
    protected $Region = null;

    /**
     * @var string $TradingAddress
     */
    protected $TradingAddress = null;

    /**
     * @var string $VATNumber
     */
    protected $VATNumber = null;

    /**
     * @param AccountStatusEnum $AccountStatus
     * @param AccountTypeEnum $AccountType
     * @param RegionEnum $Region
     */
    public function __construct($AccountStatus = null, $AccountType = null, $Region = null)
    {
      $this->AccountStatus = $AccountStatus;
      $this->AccountType = $AccountType;
      $this->Region = $Region;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \UkMail\Prod\SecurityModel\AccountWebModel
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return AccountStatusEnum
     */
    public function getAccountStatus()
    {
      return $this->AccountStatus;
    }

    /**
     * @param AccountStatusEnum $AccountStatus
     * @return \UkMail\Prod\SecurityModel\AccountWebModel
     */
    public function setAccountStatus($AccountStatus)
    {
      $this->AccountStatus = $AccountStatus;
      return $this;
    }

    /**
     * @return AccountTypeEnum
     */
    public function getAccountType()
    {
      return $this->AccountType;
    }

    /**
     * @param AccountTypeEnum $AccountType
     * @return \UkMail\Prod\SecurityModel\AccountWebModel
     */
    public function setAccountType($AccountType)
    {
      $this->AccountType = $AccountType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternativeRefAlias()
    {
      return $this->AlternativeRefAlias;
    }

    /**
     * @param string $AlternativeRefAlias
     * @return \UkMail\Prod\SecurityModel\AccountWebModel
     */
    public function setAlternativeRefAlias($AlternativeRefAlias)
    {
      $this->AlternativeRefAlias = $AlternativeRefAlias;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \UkMail\Prod\SecurityModel\AccountWebModel
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactNumber()
    {
      return $this->ContactNumber;
    }

    /**
     * @param string $ContactNumber
     * @return \UkMail\Prod\SecurityModel\AccountWebModel
     */
    public function setContactNumber($ContactNumber)
    {
      $this->ContactNumber = $ContactNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerRefAlias()
    {
      return $this->CustomerRefAlias;
    }

    /**
     * @param string $CustomerRefAlias
     * @return \UkMail\Prod\SecurityModel\AccountWebModel
     */
    public function setCustomerRefAlias($CustomerRefAlias)
    {
      $this->CustomerRefAlias = $CustomerRefAlias;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return \UkMail\Prod\SecurityModel\AccountWebModel
     */
    public function setPostcode($Postcode)
    {
      $this->Postcode = $Postcode;
      return $this;
    }

    /**
     * @return RegionEnum
     */
    public function getRegion()
    {
      return $this->Region;
    }

    /**
     * @param RegionEnum $Region
     * @return \UkMail\Prod\SecurityModel\AccountWebModel
     */
    public function setRegion($Region)
    {
      $this->Region = $Region;
      return $this;
    }

    /**
     * @return string
     */
    public function getTradingAddress()
    {
      return $this->TradingAddress;
    }

    /**
     * @param string $TradingAddress
     * @return \UkMail\Prod\SecurityModel\AccountWebModel
     */
    public function setTradingAddress($TradingAddress)
    {
      $this->TradingAddress = $TradingAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getVATNumber()
    {
      return $this->VATNumber;
    }

    /**
     * @param string $VATNumber
     * @return \UkMail\Prod\SecurityModel\AccountWebModel
     */
    public function setVATNumber($VATNumber)
    {
      $this->VATNumber = $VATNumber;
      return $this;
    }

}
