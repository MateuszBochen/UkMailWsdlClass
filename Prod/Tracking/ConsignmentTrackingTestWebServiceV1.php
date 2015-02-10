<?php

namespace UkMail\Prod\Tracking;

class ConsignmentTrackingTestWebServiceV1
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
     * @param string $UserName
     * @param string $Password
     * @param string $Token
     */
    public function __construct($UserName = null, $Password = null, $Token = null)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->Token = $Token;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingTestWebServiceV1
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingTestWebServiceV1
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingTestWebServiceV1
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

}
