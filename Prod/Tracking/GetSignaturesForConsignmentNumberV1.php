<?php

namespace UkMail\Prod\Tracking;

class GetSignaturesForConsignmentNumberV1
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
     * @var ImageType $imageType
     */
    protected $imageType = null;

    /**
     * @var string $consignmentNumber
     */
    protected $consignmentNumber = null;

    /**
     * @param string $userName
     * @param string $password
     * @param ImageType $imageType
     * @param string $consignmentNumber
     */
    public function __construct($userName = null, $password = null, $imageType = null, $consignmentNumber = null)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->imageType = $imageType;
      $this->consignmentNumber = $consignmentNumber;
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
     * @return \UkMail\Prod\Tracking\GetSignaturesForConsignmentNumberV1
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
     * @return \UkMail\Prod\Tracking\GetSignaturesForConsignmentNumberV1
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return ImageType
     */
    public function getImageType()
    {
      return $this->imageType;
    }

    /**
     * @param ImageType $imageType
     * @return \UkMail\Prod\Tracking\GetSignaturesForConsignmentNumberV1
     */
    public function setImageType($imageType)
    {
      $this->imageType = $imageType;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentNumber()
    {
      return $this->consignmentNumber;
    }

    /**
     * @param string $consignmentNumber
     * @return \UkMail\Prod\Tracking\GetSignaturesForConsignmentNumberV1
     */
    public function setConsignmentNumber($consignmentNumber)
    {
      $this->consignmentNumber = $consignmentNumber;
      return $this;
    }

}
