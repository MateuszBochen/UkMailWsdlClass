<?php

namespace UkMail\Prod\Despatching;

class AddSendToThirdPartyWebRequest extends AddReturnWebRequest
{

    /**
     * @var AddressWebModel $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var string $DeliveryBusinessName
     */
    protected $DeliveryBusinessName = null;

    /**
     * @var string $DeliveryContactName
     */
    protected $DeliveryContactName = null;

    /**
     * @var string $DeliveryEmail
     */
    protected $DeliveryEmail = null;

    /**
     * @var string $DeliveryTelephone
     */
    protected $DeliveryTelephone = null;

    /**
     * @param boolean $BookIn
     * @param \DateTime $CollectionDate
     * @param \DateTime $CollectionLatestPickup
     * @param boolean $CollectionOpenLunchtime
     * @param \DateTime $CollectionTimeReady
     * @param int $ServiceKey
     */
    public function __construct($BookIn = null, \DateTime $CollectionDate = null, \DateTime $CollectionLatestPickup = null, $CollectionOpenLunchtime = null, \DateTime $CollectionTimeReady = null, $ServiceKey = null)
    {
      parent::__construct($BookIn, $CollectionDate, $CollectionLatestPickup, $CollectionOpenLunchtime, $CollectionTimeReady, $ServiceKey);
    }

    /**
     * @return AddressWebModel
     */
    public function getDeliveryAddress()
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param AddressWebModel $DeliveryAddress
     * @return \UkMail\Prod\Despatching\AddSendToThirdPartyWebRequest
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryBusinessName()
    {
      return $this->DeliveryBusinessName;
    }

    /**
     * @param string $DeliveryBusinessName
     * @return \UkMail\Prod\Despatching\AddSendToThirdPartyWebRequest
     */
    public function setDeliveryBusinessName($DeliveryBusinessName)
    {
      $this->DeliveryBusinessName = $DeliveryBusinessName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryContactName()
    {
      return $this->DeliveryContactName;
    }

    /**
     * @param string $DeliveryContactName
     * @return \UkMail\Prod\Despatching\AddSendToThirdPartyWebRequest
     */
    public function setDeliveryContactName($DeliveryContactName)
    {
      $this->DeliveryContactName = $DeliveryContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryEmail()
    {
      return $this->DeliveryEmail;
    }

    /**
     * @param string $DeliveryEmail
     * @return \UkMail\Prod\Despatching\AddSendToThirdPartyWebRequest
     */
    public function setDeliveryEmail($DeliveryEmail)
    {
      $this->DeliveryEmail = $DeliveryEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryTelephone()
    {
      return $this->DeliveryTelephone;
    }

    /**
     * @param string $DeliveryTelephone
     * @return \UkMail\Prod\Despatching\AddSendToThirdPartyWebRequest
     */
    public function setDeliveryTelephone($DeliveryTelephone)
    {
      $this->DeliveryTelephone = $DeliveryTelephone;
      return $this;
    }

}
