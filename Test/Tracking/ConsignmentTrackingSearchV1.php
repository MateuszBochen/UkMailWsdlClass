<?php

namespace UkMail\Test\Tracking;

class ConsignmentTrackingSearchV1
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $Token
     */
    protected $Token = null;

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    /**
     * @var boolean $IsPartialConsignmentNumber
     */
    protected $IsPartialConsignmentNumber = null;

    /**
     * @var string $CustomerReference
     */
    protected $CustomerReference = null;

    /**
     * @var boolean $IsPartialCustomerReference
     */
    protected $IsPartialCustomerReference = null;

    /**
     * @var string $DeliveryPostCode
     */
    protected $DeliveryPostCode = null;

    /**
     * @var string $MailingID
     */
    protected $MailingID = null;

    /**
     * @var int $MaxResults
     */
    protected $MaxResults = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param string $Token
     * @param string $ConsignmentNumber
     * @param boolean $IsPartialConsignmentNumber
     * @param string $CustomerReference
     * @param boolean $IsPartialCustomerReference
     * @param string $DeliveryPostCode
     * @param string $MailingID
     * @param int $MaxResults
     */
    public function __construct($UserName = null, $Password = null, $Token = null, $ConsignmentNumber = null, $IsPartialConsignmentNumber = null, $CustomerReference = null, $IsPartialCustomerReference = null, $DeliveryPostCode = null, $MailingID = null, $MaxResults = null)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->Token = $Token;
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->IsPartialConsignmentNumber = $IsPartialConsignmentNumber;
      $this->CustomerReference = $CustomerReference;
      $this->IsPartialCustomerReference = $IsPartialCustomerReference;
      $this->DeliveryPostCode = $DeliveryPostCode;
      $this->MailingID = $MailingID;
      $this->MaxResults = $MaxResults;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \UkMail\Test\Tracking\ConsignmentTrackingSearchV1
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \UkMail\Test\Tracking\ConsignmentTrackingSearchV1
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->Token;
    }

    /**
     * @param string $Token
     * @return \UkMail\Test\Tracking\ConsignmentTrackingSearchV1
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentNumber()
    {
      return $this->ConsignmentNumber;
    }

    /**
     * @param string $ConsignmentNumber
     * @return \UkMail\Test\Tracking\ConsignmentTrackingSearchV1
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPartialConsignmentNumber()
    {
      return $this->IsPartialConsignmentNumber;
    }

    /**
     * @param boolean $IsPartialConsignmentNumber
     * @return \UkMail\Test\Tracking\ConsignmentTrackingSearchV1
     */
    public function setIsPartialConsignmentNumber($IsPartialConsignmentNumber)
    {
      $this->IsPartialConsignmentNumber = $IsPartialConsignmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
      return $this->CustomerReference;
    }

    /**
     * @param string $CustomerReference
     * @return \UkMail\Test\Tracking\ConsignmentTrackingSearchV1
     */
    public function setCustomerReference($CustomerReference)
    {
      $this->CustomerReference = $CustomerReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPartialCustomerReference()
    {
      return $this->IsPartialCustomerReference;
    }

    /**
     * @param boolean $IsPartialCustomerReference
     * @return \UkMail\Test\Tracking\ConsignmentTrackingSearchV1
     */
    public function setIsPartialCustomerReference($IsPartialCustomerReference)
    {
      $this->IsPartialCustomerReference = $IsPartialCustomerReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryPostCode()
    {
      return $this->DeliveryPostCode;
    }

    /**
     * @param string $DeliveryPostCode
     * @return \UkMail\Test\Tracking\ConsignmentTrackingSearchV1
     */
    public function setDeliveryPostCode($DeliveryPostCode)
    {
      $this->DeliveryPostCode = $DeliveryPostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailingID()
    {
      return $this->MailingID;
    }

    /**
     * @param string $MailingID
     * @return \UkMail\Test\Tracking\ConsignmentTrackingSearchV1
     */
    public function setMailingID($MailingID)
    {
      $this->MailingID = $MailingID;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxResults()
    {
      return $this->MaxResults;
    }

    /**
     * @param int $MaxResults
     * @return \UkMail\Test\Tracking\ConsignmentTrackingSearchV1
     */
    public function setMaxResults($MaxResults)
    {
      $this->MaxResults = $MaxResults;
      return $this;
    }

}
