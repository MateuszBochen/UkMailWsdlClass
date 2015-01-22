<?php

namespace UkMail\Prod\Despatching;

class AddDomesticConsignmentWebRequest extends AddConsignmentWebRequest
{

    /**
     * @var boolean $BookIn
     */
    protected $BookIn = null;

    /**
     * @var float $CODAmount
     */
    protected $CODAmount = null;

    /**
     * @var string $ConfirmationEmail
     */
    protected $ConfirmationEmail = null;

    /**
     * @var string $ConfirmationTelephone
     */
    protected $ConfirmationTelephone = null;

    /**
     * @var boolean $ExchangeOnDelivery
     */
    protected $ExchangeOnDelivery = null;

    /**
     * @var int $ExtendedCover
     */
    protected $ExtendedCover = null;

    /**
     * @var boolean $LongLength
     */
    protected $LongLength = null;

    /**
     * @var PreDeliveryNotificationType $PreDeliveryNotification
     */
    protected $PreDeliveryNotification = null;

    /**
     * @var string $SecureLocation1
     */
    protected $SecureLocation1 = null;

    /**
     * @var string $SecureLocation2
     */
    protected $SecureLocation2 = null;

    /**
     * @var boolean $SignatureOptional
     */
    protected $SignatureOptional = null;

    /**
     * @param boolean $ConfirmationOfDelivery
     * @param int $Items
     * @param int $ServiceKey
     * @param float $Weight
     * @param boolean $BookIn
     * @param float $CODAmount
     * @param boolean $ExchangeOnDelivery
     * @param int $ExtendedCover
     * @param boolean $LongLength
     * @param PreDeliveryNotificationType $PreDeliveryNotification
     * @param boolean $SignatureOptional
     */
    public function __construct($ConfirmationOfDelivery = null, $Items = null, $ServiceKey = null, $Weight = null, $BookIn = null, $CODAmount = null, $ExchangeOnDelivery = null, $ExtendedCover = null, $LongLength = null, $PreDeliveryNotification = null, $SignatureOptional = null)
    {
      parent::__construct($ConfirmationOfDelivery, $Items, $ServiceKey, $Weight);
      $this->BookIn = $BookIn;
      $this->CODAmount = $CODAmount;
      $this->ExchangeOnDelivery = $ExchangeOnDelivery;
      $this->ExtendedCover = $ExtendedCover;
      $this->LongLength = $LongLength;
      $this->PreDeliveryNotification = $PreDeliveryNotification;
      $this->SignatureOptional = $SignatureOptional;
    }

    /**
     * @return boolean
     */
    public function getBookIn()
    {
      return $this->BookIn;
    }

    /**
     * @param boolean $BookIn
     * @return \UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest
     */
    public function setBookIn($BookIn)
    {
      $this->BookIn = $BookIn;
      return $this;
    }

    /**
     * @return float
     */
    public function getCODAmount()
    {
      return $this->CODAmount;
    }

    /**
     * @param float $CODAmount
     * @return \UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest
     */
    public function setCODAmount($CODAmount)
    {
      $this->CODAmount = $CODAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationEmail()
    {
      return $this->ConfirmationEmail;
    }

    /**
     * @param string $ConfirmationEmail
     * @return \UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest
     */
    public function setConfirmationEmail($ConfirmationEmail)
    {
      $this->ConfirmationEmail = $ConfirmationEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationTelephone()
    {
      return $this->ConfirmationTelephone;
    }

    /**
     * @param string $ConfirmationTelephone
     * @return \UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest
     */
    public function setConfirmationTelephone($ConfirmationTelephone)
    {
      $this->ConfirmationTelephone = $ConfirmationTelephone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExchangeOnDelivery()
    {
      return $this->ExchangeOnDelivery;
    }

    /**
     * @param boolean $ExchangeOnDelivery
     * @return \UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest
     */
    public function setExchangeOnDelivery($ExchangeOnDelivery)
    {
      $this->ExchangeOnDelivery = $ExchangeOnDelivery;
      return $this;
    }

    /**
     * @return int
     */
    public function getExtendedCover()
    {
      return $this->ExtendedCover;
    }

    /**
     * @param int $ExtendedCover
     * @return \UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest
     */
    public function setExtendedCover($ExtendedCover)
    {
      $this->ExtendedCover = $ExtendedCover;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLongLength()
    {
      return $this->LongLength;
    }

    /**
     * @param boolean $LongLength
     * @return \UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest
     */
    public function setLongLength($LongLength)
    {
      $this->LongLength = $LongLength;
      return $this;
    }

    /**
     * @return PreDeliveryNotificationType
     */
    public function getPreDeliveryNotification()
    {
      return $this->PreDeliveryNotification;
    }

    /**
     * @param PreDeliveryNotificationType $PreDeliveryNotification
     * @return \UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest
     */
    public function setPreDeliveryNotification($PreDeliveryNotification)
    {
      $this->PreDeliveryNotification = $PreDeliveryNotification;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecureLocation1()
    {
      return $this->SecureLocation1;
    }

    /**
     * @param string $SecureLocation1
     * @return \UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest
     */
    public function setSecureLocation1($SecureLocation1)
    {
      $this->SecureLocation1 = $SecureLocation1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecureLocation2()
    {
      return $this->SecureLocation2;
    }

    /**
     * @param string $SecureLocation2
     * @return \UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest
     */
    public function setSecureLocation2($SecureLocation2)
    {
      $this->SecureLocation2 = $SecureLocation2;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSignatureOptional()
    {
      return $this->SignatureOptional;
    }

    /**
     * @param boolean $SignatureOptional
     * @return \UkMail\Prod\Despatching\AddDomesticConsignmentWebRequest
     */
    public function setSignatureOptional($SignatureOptional)
    {
      $this->SignatureOptional = $SignatureOptional;
      return $this;
    }

}
