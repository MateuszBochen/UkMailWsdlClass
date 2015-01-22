<?php

namespace UkMail\Test\SecurityModel;

class LoginWebRequestCustom2
{

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $Username
     */
    protected $Username = null;

    
    public function __construct()
    {
    
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
     * @return \UkMail\Test\SecurityModel\LoginWebRequest
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \UkMail\Test\SecurityModel\LoginWebRequest
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

}
