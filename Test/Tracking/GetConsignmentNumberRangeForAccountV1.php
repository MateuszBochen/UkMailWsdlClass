<?php

namespace UkMail\Test\Tracking;

class GetConsignmentNumberRangeForAccountV1
{

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $accountNumber
     */
    public function __construct($userName = null, $password = null, $accountNumber = null)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->accountNumber = $accountNumber;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \UkMail\Test\Tracking\GetConsignmentNumberRangeForAccountV1
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \UkMail\Test\Tracking\GetConsignmentNumberRangeForAccountV1
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \UkMail\Test\Tracking\GetConsignmentNumberRangeForAccountV1
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

}
