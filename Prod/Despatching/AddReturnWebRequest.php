<?php

namespace UkMail\Prod\Despatching;

class AddReturnWebRequest extends WebRequest
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var boolean $BookIn
     */
    protected $BookIn = null;

    /**
     * @var AddressWebModel $CollectionAddress
     */
    protected $CollectionAddress = null;

    /**
     * @var string $CollectionBusinessName
     */
    protected $CollectionBusinessName = null;

    /**
     * @var string $CollectionContactName
     */
    protected $CollectionContactName = null;

    /**
     * @var string $CollectionCustomersRef
     */
    protected $CollectionCustomersRef = null;

    /**
     * @var \DateTime $CollectionDate
     */
    protected $CollectionDate = null;

    /**
     * @var string $CollectionEmail
     */
    protected $CollectionEmail = null;

    /**
     * @var \DateTime $CollectionLatestPickup
     */
    protected $CollectionLatestPickup = null;

    /**
     * @var boolean $CollectionOpenLunchtime
     */
    protected $CollectionOpenLunchtime = null;

    /**
     * @var string $CollectionSpecialInstructions1
     */
    protected $CollectionSpecialInstructions1 = null;

    /**
     * @var string $CollectionSpecialInstructions2
     */
    protected $CollectionSpecialInstructions2 = null;

    /**
     * @var string $CollectionTelephone
     */
    protected $CollectionTelephone = null;

    /**
     * @var \DateTime $CollectionTimeReady
     */
    protected $CollectionTimeReady = null;

    /**
     * @var string $DeliverySpecialInstructions1
     */
    protected $DeliverySpecialInstructions1 = null;

    /**
     * @var string $DeliverySpecialInstructions2
     */
    protected $DeliverySpecialInstructions2 = null;

    /**
     * @var string $DescriptionOfGoods1
     */
    protected $DescriptionOfGoods1 = null;

    /**
     * @var string $DescriptionOfGoods2
     */
    protected $DescriptionOfGoods2 = null;

    /**
     * @var int $ServiceKey
     */
    protected $ServiceKey = null;

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
      parent::__construct();
      $this->BookIn = $BookIn;
      $this->CollectionDate = $CollectionDate ? $CollectionDate->format(\DateTime::ATOM) : null;
      $this->CollectionLatestPickup = $CollectionLatestPickup ? $CollectionLatestPickup->format(\DateTime::ATOM) : null;
      $this->CollectionOpenLunchtime = $CollectionOpenLunchtime;
      $this->CollectionTimeReady = $CollectionTimeReady ? $CollectionTimeReady->format(\DateTime::ATOM) : null;
      $this->ServiceKey = $ServiceKey;
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
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
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
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setBookIn($BookIn)
    {
      $this->BookIn = $BookIn;
      return $this;
    }

    /**
     * @return AddressWebModel
     */
    public function getCollectionAddress()
    {
      return $this->CollectionAddress;
    }

    /**
     * @param AddressWebModel $CollectionAddress
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionAddress($CollectionAddress)
    {
      $this->CollectionAddress = $CollectionAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectionBusinessName()
    {
      return $this->CollectionBusinessName;
    }

    /**
     * @param string $CollectionBusinessName
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionBusinessName($CollectionBusinessName)
    {
      $this->CollectionBusinessName = $CollectionBusinessName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectionContactName()
    {
      return $this->CollectionContactName;
    }

    /**
     * @param string $CollectionContactName
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionContactName($CollectionContactName)
    {
      $this->CollectionContactName = $CollectionContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectionCustomersRef()
    {
      return $this->CollectionCustomersRef;
    }

    /**
     * @param string $CollectionCustomersRef
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionCustomersRef($CollectionCustomersRef)
    {
      $this->CollectionCustomersRef = $CollectionCustomersRef;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCollectionDate()
    {
      if ($this->CollectionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CollectionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CollectionDate
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionDate(\DateTime $CollectionDate)
    {
      $this->CollectionDate = $CollectionDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectionEmail()
    {
      return $this->CollectionEmail;
    }

    /**
     * @param string $CollectionEmail
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionEmail($CollectionEmail)
    {
      $this->CollectionEmail = $CollectionEmail;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCollectionLatestPickup()
    {
      if ($this->CollectionLatestPickup == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CollectionLatestPickup);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CollectionLatestPickup
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionLatestPickup(\DateTime $CollectionLatestPickup)
    {
      $this->CollectionLatestPickup = $CollectionLatestPickup->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCollectionOpenLunchtime()
    {
      return $this->CollectionOpenLunchtime;
    }

    /**
     * @param boolean $CollectionOpenLunchtime
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionOpenLunchtime($CollectionOpenLunchtime)
    {
      $this->CollectionOpenLunchtime = $CollectionOpenLunchtime;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectionSpecialInstructions1()
    {
      return $this->CollectionSpecialInstructions1;
    }

    /**
     * @param string $CollectionSpecialInstructions1
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionSpecialInstructions1($CollectionSpecialInstructions1)
    {
      $this->CollectionSpecialInstructions1 = $CollectionSpecialInstructions1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectionSpecialInstructions2()
    {
      return $this->CollectionSpecialInstructions2;
    }

    /**
     * @param string $CollectionSpecialInstructions2
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionSpecialInstructions2($CollectionSpecialInstructions2)
    {
      $this->CollectionSpecialInstructions2 = $CollectionSpecialInstructions2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectionTelephone()
    {
      return $this->CollectionTelephone;
    }

    /**
     * @param string $CollectionTelephone
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionTelephone($CollectionTelephone)
    {
      $this->CollectionTelephone = $CollectionTelephone;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCollectionTimeReady()
    {
      if ($this->CollectionTimeReady == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CollectionTimeReady);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CollectionTimeReady
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setCollectionTimeReady(\DateTime $CollectionTimeReady)
    {
      $this->CollectionTimeReady = $CollectionTimeReady->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliverySpecialInstructions1()
    {
      return $this->DeliverySpecialInstructions1;
    }

    /**
     * @param string $DeliverySpecialInstructions1
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setDeliverySpecialInstructions1($DeliverySpecialInstructions1)
    {
      $this->DeliverySpecialInstructions1 = $DeliverySpecialInstructions1;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliverySpecialInstructions2()
    {
      return $this->DeliverySpecialInstructions2;
    }

    /**
     * @param string $DeliverySpecialInstructions2
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setDeliverySpecialInstructions2($DeliverySpecialInstructions2)
    {
      $this->DeliverySpecialInstructions2 = $DeliverySpecialInstructions2;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionOfGoods1()
    {
      return $this->DescriptionOfGoods1;
    }

    /**
     * @param string $DescriptionOfGoods1
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setDescriptionOfGoods1($DescriptionOfGoods1)
    {
      $this->DescriptionOfGoods1 = $DescriptionOfGoods1;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionOfGoods2()
    {
      return $this->DescriptionOfGoods2;
    }

    /**
     * @param string $DescriptionOfGoods2
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setDescriptionOfGoods2($DescriptionOfGoods2)
    {
      $this->DescriptionOfGoods2 = $DescriptionOfGoods2;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceKey()
    {
      return $this->ServiceKey;
    }

    /**
     * @param int $ServiceKey
     * @return \UkMail\Prod\Despatching\AddReturnWebRequest
     */
    public function setServiceKey($ServiceKey)
    {
      $this->ServiceKey = $ServiceKey;
      return $this;
    }

}
