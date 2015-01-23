<?php

namespace UkMail\Prod\BookCollection;

class WebRequest
{

    /**
     * @var string $AuthenticationToken
     */
    protected $AuthenticationToken = null;

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
    public function getAuthenticationToken()
    {
      return $this->AuthenticationToken;
    }

    /**
     * @param string $AuthenticationToken
     * @return \UkMail\Prod\BookCollection\WebRequest
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
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
     * @return \UkMail\Prod\BookCollection\WebRequest
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

}
