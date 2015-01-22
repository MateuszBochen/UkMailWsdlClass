<?php

namespace UkMail\Prod\Despatching;

class AddPacketConsignmentWebRequest extends WebRequest
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var string $CollectionJobNumber
     */
    protected $CollectionJobNumber = null;

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

    /**
     * @var string $BusinessName
     */
    protected $BusinessName = null;

    /**
     * @var PacketAddressWebModel $Address
     */
    protected $Address = null;

    /**
     * @var string $CustomersRef
     */
    protected $CustomersRef = null;

    /**
     * @var string $AlternativeRef
     */
    protected $AlternativeRef = null;

    /**
     * @var int $WeightInGrams
     */
    protected $WeightInGrams = null;

    /**
     * @var int $PacketLength
     */
    protected $PacketLength = null;

    /**
     * @var int $PacketWidth
     */
    protected $PacketWidth = null;

    /**
     * @var int $PacketHeight
     */
    protected $PacketHeight = null;

    /**
     * @var string $DeliveryMessage1
     */
    protected $DeliveryMessage1 = null;

    /**
     * @var string $DeliveryMessage2
     */
    protected $DeliveryMessage2 = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectionJobNumber()
    {
      return $this->CollectionJobNumber;
    }

    /**
     * @param string $CollectionJobNumber
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setCollectionJobNumber($CollectionJobNumber)
    {
      $this->CollectionJobNumber = $CollectionJobNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
      return $this->ContactName;
    }

    /**
     * @param string $ContactName
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setContactName($ContactName)
    {
      $this->ContactName = $ContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessName()
    {
      return $this->BusinessName;
    }

    /**
     * @param string $BusinessName
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setBusinessName($BusinessName)
    {
      $this->BusinessName = $BusinessName;
      return $this;
    }

    /**
     * @return PacketAddressWebModel
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param PacketAddressWebModel $Address
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomersRef()
    {
      return $this->CustomersRef;
    }

    /**
     * @param string $CustomersRef
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setCustomersRef($CustomersRef)
    {
      $this->CustomersRef = $CustomersRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternativeRef()
    {
      return $this->AlternativeRef;
    }

    /**
     * @param string $AlternativeRef
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setAlternativeRef($AlternativeRef)
    {
      $this->AlternativeRef = $AlternativeRef;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeightInGrams()
    {
      return $this->WeightInGrams;
    }

    /**
     * @param int $WeightInGrams
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setWeightInGrams($WeightInGrams)
    {
      $this->WeightInGrams = $WeightInGrams;
      return $this;
    }

    /**
     * @return int
     */
    public function getPacketLength()
    {
      return $this->PacketLength;
    }

    /**
     * @param int $PacketLength
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setPacketLength($PacketLength)
    {
      $this->PacketLength = $PacketLength;
      return $this;
    }

    /**
     * @return int
     */
    public function getPacketWidth()
    {
      return $this->PacketWidth;
    }

    /**
     * @param int $PacketWidth
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setPacketWidth($PacketWidth)
    {
      $this->PacketWidth = $PacketWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getPacketHeight()
    {
      return $this->PacketHeight;
    }

    /**
     * @param int $PacketHeight
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setPacketHeight($PacketHeight)
    {
      $this->PacketHeight = $PacketHeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryMessage1()
    {
      return $this->DeliveryMessage1;
    }

    /**
     * @param string $DeliveryMessage1
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setDeliveryMessage1($DeliveryMessage1)
    {
      $this->DeliveryMessage1 = $DeliveryMessage1;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryMessage2()
    {
      return $this->DeliveryMessage2;
    }

    /**
     * @param string $DeliveryMessage2
     * @return \UkMail\Prod\Despatching\AddPacketConsignmentWebRequest
     */
    public function setDeliveryMessage2($DeliveryMessage2)
    {
      $this->DeliveryMessage2 = $DeliveryMessage2;
      return $this;
    }

}
