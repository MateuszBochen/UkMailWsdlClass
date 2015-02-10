<?php

namespace UkMail\Test\Tracking;

class ThirdPartyCollectionV1
{

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    /**
     * @var char $Action
     */
    protected $Action = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var \DateTime $CollectionDate
     */
    protected $CollectionDate = null;

    /**
     * @var string $DestinationID
     */
    protected $DestinationID = null;

    /**
     * @var string $CollectName
     */
    protected $CollectName = null;

    /**
     * @var string $CollectAddress1
     */
    protected $CollectAddress1 = null;

    /**
     * @var string $CollectAddress2
     */
    protected $CollectAddress2 = null;

    /**
     * @var string $CollectPlaceName
     */
    protected $CollectPlaceName = null;

    /**
     * @var string $CollectPostalTown
     */
    protected $CollectPostalTown = null;

    /**
     * @var string $CollectCounty
     */
    protected $CollectCounty = null;

    /**
     * @var string $CollectPostCode
     */
    protected $CollectPostCode = null;

    /**
     * @var string $CollectContact
     */
    protected $CollectContact = null;

    /**
     * @var string $CollectTelephone
     */
    protected $CollectTelephone = null;

    /**
     * @var string $CollectEmail
     */
    protected $CollectEmail = null;

    /**
     * @var string $CollectSpecialInstructions1
     */
    protected $CollectSpecialInstructions1 = null;

    /**
     * @var string $CollectSpecialInstructions2
     */
    protected $CollectSpecialInstructions2 = null;

    /**
     * @var string $CustomerReference
     */
    protected $CustomerReference = null;

    /**
     * @var string $AlternativeReference
     */
    protected $AlternativeReference = null;

    /**
     * @var \DateTime $TimeReady
     */
    protected $TimeReady = null;

    /**
     * @var boolean $OpenLunchtime
     */
    protected $OpenLunchtime = null;

    /**
     * @var \DateTime $LatestPickupTime
     */
    protected $LatestPickupTime = null;

    /**
     * @var int $TotalItems
     */
    protected $TotalItems = null;

    /**
     * @var float $TotalWeight
     */
    protected $TotalWeight = null;

    /**
     * @var string $DeliverySpecialInstructions1
     */
    protected $DeliverySpecialInstructions1 = null;

    /**
     * @var string $DeliverySpecialInstructions2
     */
    protected $DeliverySpecialInstructions2 = null;

    /**
     * @var int $ServiceCode
     */
    protected $ServiceCode = null;

    /**
     * @var int $InsuranceUnits
     */
    protected $InsuranceUnits = null;

    /**
     * @var \DateTime $TimedDeliveryTime
     */
    protected $TimedDeliveryTime = null;

    /**
     * @var boolean $BookIn
     */
    protected $BookIn = null;

    /**
     * @var \DateTime $ManifestDateTime
     */
    protected $ManifestDateTime = null;

    /**
     * @var string $UserID
     */
    protected $UserID = null;

    /**
     * @var \DateTime $ModifiedDateTime
     */
    protected $ModifiedDateTime = null;

    /**
     * @var string $DescriptionOfGoods1
     */
    protected $DescriptionOfGoods1 = null;

    /**
     * @var string $DescriptionOfGoods2
     */
    protected $DescriptionOfGoods2 = null;

    /**
     * @param string $ConsignmentNumber
     * @param char $Action
     * @param string $AccountNumber
     * @param \DateTime $CollectionDate
     * @param string $DestinationID
     * @param string $CollectName
     * @param string $CollectAddress1
     * @param string $CollectAddress2
     * @param string $CollectPlaceName
     * @param string $CollectPostalTown
     * @param string $CollectCounty
     * @param string $CollectPostCode
     * @param string $CollectContact
     * @param string $CollectTelephone
     * @param string $CollectEmail
     * @param string $CollectSpecialInstructions1
     * @param string $CollectSpecialInstructions2
     * @param string $CustomerReference
     * @param string $AlternativeReference
     * @param \DateTime $TimeReady
     * @param boolean $OpenLunchtime
     * @param \DateTime $LatestPickupTime
     * @param int $TotalItems
     * @param float $TotalWeight
     * @param string $DeliverySpecialInstructions1
     * @param string $DeliverySpecialInstructions2
     * @param int $ServiceCode
     * @param int $InsuranceUnits
     * @param \DateTime $TimedDeliveryTime
     * @param boolean $BookIn
     * @param \DateTime $ManifestDateTime
     * @param string $UserID
     * @param \DateTime $ModifiedDateTime
     * @param string $DescriptionOfGoods1
     * @param string $DescriptionOfGoods2
     */
    public function __construct($ConsignmentNumber = null, $Action = null, $AccountNumber = null, \DateTime $CollectionDate = null, $DestinationID = null, $CollectName = null, $CollectAddress1 = null, $CollectAddress2 = null, $CollectPlaceName = null, $CollectPostalTown = null, $CollectCounty = null, $CollectPostCode = null, $CollectContact = null, $CollectTelephone = null, $CollectEmail = null, $CollectSpecialInstructions1 = null, $CollectSpecialInstructions2 = null, $CustomerReference = null, $AlternativeReference = null, \DateTime $TimeReady = null, $OpenLunchtime = null, \DateTime $LatestPickupTime = null, $TotalItems = null, $TotalWeight = null, $DeliverySpecialInstructions1 = null, $DeliverySpecialInstructions2 = null, $ServiceCode = null, $InsuranceUnits = null, \DateTime $TimedDeliveryTime = null, $BookIn = null, \DateTime $ManifestDateTime = null, $UserID = null, \DateTime $ModifiedDateTime = null, $DescriptionOfGoods1 = null, $DescriptionOfGoods2 = null)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->Action = $Action;
      $this->AccountNumber = $AccountNumber;
      $this->CollectionDate = $CollectionDate ? $CollectionDate->format(\DateTime::ATOM) : null;
      $this->DestinationID = $DestinationID;
      $this->CollectName = $CollectName;
      $this->CollectAddress1 = $CollectAddress1;
      $this->CollectAddress2 = $CollectAddress2;
      $this->CollectPlaceName = $CollectPlaceName;
      $this->CollectPostalTown = $CollectPostalTown;
      $this->CollectCounty = $CollectCounty;
      $this->CollectPostCode = $CollectPostCode;
      $this->CollectContact = $CollectContact;
      $this->CollectTelephone = $CollectTelephone;
      $this->CollectEmail = $CollectEmail;
      $this->CollectSpecialInstructions1 = $CollectSpecialInstructions1;
      $this->CollectSpecialInstructions2 = $CollectSpecialInstructions2;
      $this->CustomerReference = $CustomerReference;
      $this->AlternativeReference = $AlternativeReference;
      $this->TimeReady = $TimeReady ? $TimeReady->format(\DateTime::ATOM) : null;
      $this->OpenLunchtime = $OpenLunchtime;
      $this->LatestPickupTime = $LatestPickupTime ? $LatestPickupTime->format(\DateTime::ATOM) : null;
      $this->TotalItems = $TotalItems;
      $this->TotalWeight = $TotalWeight;
      $this->DeliverySpecialInstructions1 = $DeliverySpecialInstructions1;
      $this->DeliverySpecialInstructions2 = $DeliverySpecialInstructions2;
      $this->ServiceCode = $ServiceCode;
      $this->InsuranceUnits = $InsuranceUnits;
      $this->TimedDeliveryTime = $TimedDeliveryTime ? $TimedDeliveryTime->format(\DateTime::ATOM) : null;
      $this->BookIn = $BookIn;
      $this->ManifestDateTime = $ManifestDateTime ? $ManifestDateTime->format(\DateTime::ATOM) : null;
      $this->UserID = $UserID;
      $this->ModifiedDateTime = $ModifiedDateTime ? $ModifiedDateTime->format(\DateTime::ATOM) : null;
      $this->DescriptionOfGoods1 = $DescriptionOfGoods1;
      $this->DescriptionOfGoods2 = $DescriptionOfGoods2;
    }

    /**
     * @return string
     */
    public function getConsignmentNumber()
    {
      return $this->ConsignmentNumber;
    }

    /**
     * @param string $ConsignmentNumber
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

    /**
     * @return char
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param char $Action
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
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
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
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
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectionDate(\DateTime $CollectionDate)
    {
      $this->CollectionDate = $CollectionDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationID()
    {
      return $this->DestinationID;
    }

    /**
     * @param string $DestinationID
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setDestinationID($DestinationID)
    {
      $this->DestinationID = $DestinationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectName()
    {
      return $this->CollectName;
    }

    /**
     * @param string $CollectName
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectName($CollectName)
    {
      $this->CollectName = $CollectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectAddress1()
    {
      return $this->CollectAddress1;
    }

    /**
     * @param string $CollectAddress1
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectAddress1($CollectAddress1)
    {
      $this->CollectAddress1 = $CollectAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectAddress2()
    {
      return $this->CollectAddress2;
    }

    /**
     * @param string $CollectAddress2
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectAddress2($CollectAddress2)
    {
      $this->CollectAddress2 = $CollectAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectPlaceName()
    {
      return $this->CollectPlaceName;
    }

    /**
     * @param string $CollectPlaceName
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectPlaceName($CollectPlaceName)
    {
      $this->CollectPlaceName = $CollectPlaceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectPostalTown()
    {
      return $this->CollectPostalTown;
    }

    /**
     * @param string $CollectPostalTown
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectPostalTown($CollectPostalTown)
    {
      $this->CollectPostalTown = $CollectPostalTown;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectCounty()
    {
      return $this->CollectCounty;
    }

    /**
     * @param string $CollectCounty
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectCounty($CollectCounty)
    {
      $this->CollectCounty = $CollectCounty;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectPostCode()
    {
      return $this->CollectPostCode;
    }

    /**
     * @param string $CollectPostCode
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectPostCode($CollectPostCode)
    {
      $this->CollectPostCode = $CollectPostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectContact()
    {
      return $this->CollectContact;
    }

    /**
     * @param string $CollectContact
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectContact($CollectContact)
    {
      $this->CollectContact = $CollectContact;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectTelephone()
    {
      return $this->CollectTelephone;
    }

    /**
     * @param string $CollectTelephone
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectTelephone($CollectTelephone)
    {
      $this->CollectTelephone = $CollectTelephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectEmail()
    {
      return $this->CollectEmail;
    }

    /**
     * @param string $CollectEmail
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectEmail($CollectEmail)
    {
      $this->CollectEmail = $CollectEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectSpecialInstructions1()
    {
      return $this->CollectSpecialInstructions1;
    }

    /**
     * @param string $CollectSpecialInstructions1
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectSpecialInstructions1($CollectSpecialInstructions1)
    {
      $this->CollectSpecialInstructions1 = $CollectSpecialInstructions1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectSpecialInstructions2()
    {
      return $this->CollectSpecialInstructions2;
    }

    /**
     * @param string $CollectSpecialInstructions2
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCollectSpecialInstructions2($CollectSpecialInstructions2)
    {
      $this->CollectSpecialInstructions2 = $CollectSpecialInstructions2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
      return $this->CustomerReference;
    }

    /**
     * @param string $CustomerReference
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setCustomerReference($CustomerReference)
    {
      $this->CustomerReference = $CustomerReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternativeReference()
    {
      return $this->AlternativeReference;
    }

    /**
     * @param string $AlternativeReference
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setAlternativeReference($AlternativeReference)
    {
      $this->AlternativeReference = $AlternativeReference;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeReady()
    {
      if ($this->TimeReady == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeReady);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeReady
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setTimeReady(\DateTime $TimeReady)
    {
      $this->TimeReady = $TimeReady->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOpenLunchtime()
    {
      return $this->OpenLunchtime;
    }

    /**
     * @param boolean $OpenLunchtime
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setOpenLunchtime($OpenLunchtime)
    {
      $this->OpenLunchtime = $OpenLunchtime;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLatestPickupTime()
    {
      if ($this->LatestPickupTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LatestPickupTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LatestPickupTime
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setLatestPickupTime(\DateTime $LatestPickupTime)
    {
      $this->LatestPickupTime = $LatestPickupTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalItems()
    {
      return $this->TotalItems;
    }

    /**
     * @param int $TotalItems
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setTotalItems($TotalItems)
    {
      $this->TotalItems = $TotalItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalWeight()
    {
      return $this->TotalWeight;
    }

    /**
     * @param float $TotalWeight
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setTotalWeight($TotalWeight)
    {
      $this->TotalWeight = $TotalWeight;
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
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
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
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setDeliverySpecialInstructions2($DeliverySpecialInstructions2)
    {
      $this->DeliverySpecialInstructions2 = $DeliverySpecialInstructions2;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceCode()
    {
      return $this->ServiceCode;
    }

    /**
     * @param int $ServiceCode
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setServiceCode($ServiceCode)
    {
      $this->ServiceCode = $ServiceCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getInsuranceUnits()
    {
      return $this->InsuranceUnits;
    }

    /**
     * @param int $InsuranceUnits
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setInsuranceUnits($InsuranceUnits)
    {
      $this->InsuranceUnits = $InsuranceUnits;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimedDeliveryTime()
    {
      if ($this->TimedDeliveryTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimedDeliveryTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimedDeliveryTime
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setTimedDeliveryTime(\DateTime $TimedDeliveryTime)
    {
      $this->TimedDeliveryTime = $TimedDeliveryTime->format(\DateTime::ATOM);
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
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setBookIn($BookIn)
    {
      $this->BookIn = $BookIn;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getManifestDateTime()
    {
      if ($this->ManifestDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ManifestDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ManifestDateTime
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setManifestDateTime(\DateTime $ManifestDateTime)
    {
      $this->ManifestDateTime = $ManifestDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param string $UserID
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDateTime()
    {
      if ($this->ModifiedDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDateTime
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setModifiedDateTime(\DateTime $ModifiedDateTime)
    {
      $this->ModifiedDateTime = $ModifiedDateTime->format(\DateTime::ATOM);
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
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
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
     * @return \UkMail\Test\Tracking\ThirdPartyCollectionV1
     */
    public function setDescriptionOfGoods2($DescriptionOfGoods2)
    {
      $this->DescriptionOfGoods2 = $DescriptionOfGoods2;
      return $this;
    }

}
