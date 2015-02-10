<?php

namespace UkMail\Prod\Tracking;

class ManifestDomesticV1
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
     * @var DomesticV1 $domesticV1
     */
    protected $domesticV1 = null;

    /**
     * @param string $userName
     * @param string $password
     * @param DomesticV1 $domesticV1
     */
    public function __construct($userName = null, $password = null, $domesticV1 = null)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->domesticV1 = $domesticV1;
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
     * @return \UkMail\Prod\Tracking\ManifestDomesticV1
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
     * @return \UkMail\Prod\Tracking\ManifestDomesticV1
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return DomesticV1
     */
    public function getDomesticV1()
    {
      return $this->domesticV1;
    }

    /**
     * @param DomesticV1 $domesticV1
     * @return \UkMail\Prod\Tracking\ManifestDomesticV1
     */
    public function setDomesticV1($domesticV1)
    {
      $this->domesticV1 = $domesticV1;
      return $this;
    }

}
