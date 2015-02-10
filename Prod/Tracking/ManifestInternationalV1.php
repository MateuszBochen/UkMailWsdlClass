<?php

namespace UkMail\Prod\Tracking;

class ManifestInternationalV1
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
     * @var InternationalV1 $internationalV1
     */
    protected $internationalV1 = null;

    /**
     * @param string $userName
     * @param string $password
     * @param InternationalV1 $internationalV1
     */
    public function __construct($userName = null, $password = null, $internationalV1 = null)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->internationalV1 = $internationalV1;
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
     * @return \UkMail\Prod\Tracking\ManifestInternationalV1
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
     * @return \UkMail\Prod\Tracking\ManifestInternationalV1
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return InternationalV1
     */
    public function getInternationalV1()
    {
      return $this->internationalV1;
    }

    /**
     * @param InternationalV1 $internationalV1
     * @return \UkMail\Prod\Tracking\ManifestInternationalV1
     */
    public function setInternationalV1($internationalV1)
    {
      $this->internationalV1 = $internationalV1;
      return $this;
    }

}
