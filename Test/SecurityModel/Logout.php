<?php

namespace UkMail\Test\SecurityModel;

class Logout
{

    /**
     * @var WebRequest $webRequest
     */
    protected $webRequest = null;

    /**
     * @param WebRequest $webRequest
     */
    public function __construct($webRequest = null)
    {
      $this->webRequest = $webRequest;
    }

    /**
     * @return WebRequest
     */
    public function getWebRequest()
    {
      return $this->webRequest;
    }

    /**
     * @param WebRequest $webRequest
     * @return \UkMail\Test\SecurityModel\Logout
     */
    public function setWebRequest($webRequest)
    {
      $this->webRequest = $webRequest;
      return $this;
    }

}
