<?php

namespace UkMail\Prod\Tracking;

class ConsignmentTrackingGetStatusV1
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
     * @var float $ConsignmentKey
     */
    protected $ConsignmentKey = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param string $Token
     * @param string $ConsignmentNumber
     * @param float $ConsignmentKey
     */
    public function __construct($UserName = null, $Password = null, $Token = null, $ConsignmentNumber = null, $ConsignmentKey = null)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->Token = $Token;
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->ConsignmentKey = $ConsignmentKey;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetStatusV1
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetStatusV1
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetStatusV1
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetStatusV1
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsignmentKey()
    {
      return $this->ConsignmentKey;
    }

    /**
     * @param float $ConsignmentKey
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetStatusV1
     */
    public function setConsignmentKey($ConsignmentKey)
    {
      $this->ConsignmentKey = $ConsignmentKey;
      return $this;
    }

}
