<?php

namespace UkMail\Prod\Tracking;

class ManifestThirdPartyCollectionV1
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
     * @var ThirdPartyCollectionV1 $thirdPartyCollectionV1
     */
    protected $thirdPartyCollectionV1 = null;

    /**
     * @param string $userName
     * @param string $password
     * @param ThirdPartyCollectionV1 $thirdPartyCollectionV1
     */
    public function __construct($userName = null, $password = null, $thirdPartyCollectionV1 = null)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->thirdPartyCollectionV1 = $thirdPartyCollectionV1;
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
     * @return \UkMail\Prod\Tracking\ManifestThirdPartyCollectionV1
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
     * @return \UkMail\Prod\Tracking\ManifestThirdPartyCollectionV1
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return ThirdPartyCollectionV1
     */
    public function getThirdPartyCollectionV1()
    {
      return $this->thirdPartyCollectionV1;
    }

    /**
     * @param ThirdPartyCollectionV1 $thirdPartyCollectionV1
     * @return \UkMail\Prod\Tracking\ManifestThirdPartyCollectionV1
     */
    public function setThirdPartyCollectionV1($thirdPartyCollectionV1)
    {
      $this->thirdPartyCollectionV1 = $thirdPartyCollectionV1;
      return $this;
    }

}
