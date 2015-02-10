<?php

namespace UkMail\Test\Tracking;

class ManifestParcelScanV1
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
     * @var ParcelScanV1 $parcelScanV1
     */
    protected $parcelScanV1 = null;

    /**
     * @param string $userName
     * @param string $password
     * @param ParcelScanV1 $parcelScanV1
     */
    public function __construct($userName = null, $password = null, $parcelScanV1 = null)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->parcelScanV1 = $parcelScanV1;
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
     * @return \UkMail\Test\Tracking\ManifestParcelScanV1
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
     * @return \UkMail\Test\Tracking\ManifestParcelScanV1
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return ParcelScanV1
     */
    public function getParcelScanV1()
    {
      return $this->parcelScanV1;
    }

    /**
     * @param ParcelScanV1 $parcelScanV1
     * @return \UkMail\Test\Tracking\ManifestParcelScanV1
     */
    public function setParcelScanV1($parcelScanV1)
    {
      $this->parcelScanV1 = $parcelScanV1;
      return $this;
    }

}
