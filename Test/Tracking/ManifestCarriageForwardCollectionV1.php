<?php

namespace UkMail\Test\Tracking;

class ManifestCarriageForwardCollectionV1
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
     * @var CarriageForwardCollectionV1 $carriageForwardCollectionV1
     */
    protected $carriageForwardCollectionV1 = null;

    /**
     * @param string $userName
     * @param string $password
     * @param CarriageForwardCollectionV1 $carriageForwardCollectionV1
     */
    public function __construct($userName = null, $password = null, $carriageForwardCollectionV1 = null)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->carriageForwardCollectionV1 = $carriageForwardCollectionV1;
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
     * @return \UkMail\Test\Tracking\ManifestCarriageForwardCollectionV1
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
     * @return \UkMail\Test\Tracking\ManifestCarriageForwardCollectionV1
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return CarriageForwardCollectionV1
     */
    public function getCarriageForwardCollectionV1()
    {
      return $this->carriageForwardCollectionV1;
    }

    /**
     * @param CarriageForwardCollectionV1 $carriageForwardCollectionV1
     * @return \UkMail\Test\Tracking\ManifestCarriageForwardCollectionV1
     */
    public function setCarriageForwardCollectionV1($carriageForwardCollectionV1)
    {
      $this->carriageForwardCollectionV1 = $carriageForwardCollectionV1;
      return $this;
    }

}
