<?php

namespace UkMail\Prod\Tracking;

class GetEstimatedTimeOfArrivalForPostcode
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
     * @var string $Postcode
     */
    protected $Postcode = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param string $Postcode
     */
    public function __construct($UserName = null, $Password = null, $Postcode = null)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->Postcode = $Postcode;
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
     * @return \UkMail\Prod\Tracking\GetEstimatedTimeOfArrivalForPostcode
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
     * @return \UkMail\Prod\Tracking\GetEstimatedTimeOfArrivalForPostcode
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
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
     * @return \UkMail\Prod\Tracking\GetEstimatedTimeOfArrivalForPostcode
     */
    public function setPostcode($Postcode)
    {
      $this->Postcode = $Postcode;
      return $this;
    }

}
