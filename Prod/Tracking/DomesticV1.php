<?php

namespace UkMail\Prod\Tracking;

class DomesticV1
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
     * @var \DateTime $JobDate
     */
    protected $JobDate = null;

    /**
     * @var string $DestinationID
     */
    protected $DestinationID = null;

    /**
     * @var string $BusinessName
     */
    protected $BusinessName = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $PlaceName
     */
    protected $PlaceName = null;

    /**
     * @var string $PostalTown
     */
    protected $PostalTown = null;

    /**
     * @var string $County
     */
    protected $County = null;

    /**
     * @var string $PostCode
     */
    protected $PostCode = null;

    /**
     * @var int $TotalItems
     */
    protected $TotalItems = null;

    /**
     * @var float $TotalWeight
     */
    protected $TotalWeight = null;

    /**
     * @var int $ServiceCode
     */
    protected $ServiceCode = null;

    /**
     * @var int $CODAmount
     */
    protected $CODAmount = null;

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
     * @var boolean $SwapOut
     */
    protected $SwapOut = null;

    /**
     * @var boolean $IOD
     */
    protected $IOD = null;

    /**
     * @var int $TotalPallets
     */
    protected $TotalPallets = null;

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
     * @var string $HouseDetails1
     */
    protected $HouseDetails1 = null;

    /**
     * @var string $HouseDetails2
     */
    protected $HouseDetails2 = null;

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
     * @var string $IODEmailAddress
     */
    protected $IODEmailAddress = null;

    /**
     * @var string $IODTelephone
     */
    protected $IODTelephone = null;

    /**
     * @var boolean $LongLength
     */
    protected $LongLength = null;

    /**
     * @var ArrayOfDomesticSubV1 $DomesticSubConsignments
     */
    protected $DomesticSubConsignments = null;

    /**
     * @var ArrayOfBoxV1 $BoxRecords
     */
    protected $BoxRecords = null;

    /**
     * @param string $ConsignmentNumber
     * @param char $Action
     * @param string $AccountNumber
     * @param \DateTime $JobDate
     * @param string $DestinationID
     * @param string $BusinessName
     * @param string $Address1
     * @param string $Address2
     * @param string $PlaceName
     * @param string $PostalTown
     * @param string $County
     * @param string $PostCode
     * @param int $TotalItems
     * @param float $TotalWeight
     * @param int $ServiceCode
     * @param int $CODAmount
     * @param int $InsuranceUnits
     * @param \DateTime $TimedDeliveryTime
     * @param boolean $BookIn
     * @param boolean $SwapOut
     * @param boolean $IOD
     * @param int $TotalPallets
     * @param \DateTime $ManifestDateTime
     * @param string $UserID
     * @param \DateTime $ModifiedDateTime
     * @param string $HouseDetails1
     * @param string $HouseDetails2
     * @param string $SecureLocation1
     * @param string $SecureLocation2
     * @param boolean $SignatureOptional
     * @param string $IODEmailAddress
     * @param string $IODTelephone
     * @param boolean $LongLength
     * @param ArrayOfDomesticSubV1 $DomesticSubConsignments
     * @param ArrayOfBoxV1 $BoxRecords
     */
    public function __construct($ConsignmentNumber = null, $Action = null, $AccountNumber = null, \DateTime $JobDate = null, $DestinationID = null, $BusinessName = null, $Address1 = null, $Address2 = null, $PlaceName = null, $PostalTown = null, $County = null, $PostCode = null, $TotalItems = null, $TotalWeight = null, $ServiceCode = null, $CODAmount = null, $InsuranceUnits = null, \DateTime $TimedDeliveryTime = null, $BookIn = null, $SwapOut = null, $IOD = null, $TotalPallets = null, \DateTime $ManifestDateTime = null, $UserID = null, \DateTime $ModifiedDateTime = null, $HouseDetails1 = null, $HouseDetails2 = null, $SecureLocation1 = null, $SecureLocation2 = null, $SignatureOptional = null, $IODEmailAddress = null, $IODTelephone = null, $LongLength = null, $DomesticSubConsignments = null, $BoxRecords = null)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->Action = $Action;
      $this->AccountNumber = $AccountNumber;
      $this->JobDate = $JobDate ? $JobDate->format(\DateTime::ATOM) : null;
      $this->DestinationID = $DestinationID;
      $this->BusinessName = $BusinessName;
      $this->Address1 = $Address1;
      $this->Address2 = $Address2;
      $this->PlaceName = $PlaceName;
      $this->PostalTown = $PostalTown;
      $this->County = $County;
      $this->PostCode = $PostCode;
      $this->TotalItems = $TotalItems;
      $this->TotalWeight = $TotalWeight;
      $this->ServiceCode = $ServiceCode;
      $this->CODAmount = $CODAmount;
      $this->InsuranceUnits = $InsuranceUnits;
      $this->TimedDeliveryTime = $TimedDeliveryTime ? $TimedDeliveryTime->format(\DateTime::ATOM) : null;
      $this->BookIn = $BookIn;
      $this->SwapOut = $SwapOut;
      $this->IOD = $IOD;
      $this->TotalPallets = $TotalPallets;
      $this->ManifestDateTime = $ManifestDateTime ? $ManifestDateTime->format(\DateTime::ATOM) : null;
      $this->UserID = $UserID;
      $this->ModifiedDateTime = $ModifiedDateTime ? $ModifiedDateTime->format(\DateTime::ATOM) : null;
      $this->HouseDetails1 = $HouseDetails1;
      $this->HouseDetails2 = $HouseDetails2;
      $this->SecureLocation1 = $SecureLocation1;
      $this->SecureLocation2 = $SecureLocation2;
      $this->SignatureOptional = $SignatureOptional;
      $this->IODEmailAddress = $IODEmailAddress;
      $this->IODTelephone = $IODTelephone;
      $this->LongLength = $LongLength;
      $this->DomesticSubConsignments = $DomesticSubConsignments;
      $this->BoxRecords = $BoxRecords;
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
     * @return \UkMail\Prod\Tracking\DomesticV1
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
     * @return \UkMail\Prod\Tracking\DomesticV1
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
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getJobDate()
    {
      if ($this->JobDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->JobDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $JobDate
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setJobDate(\DateTime $JobDate)
    {
      $this->JobDate = $JobDate->format(\DateTime::ATOM);
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
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setDestinationID($DestinationID)
    {
      $this->DestinationID = $DestinationID;
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
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setBusinessName($BusinessName)
    {
      $this->BusinessName = $BusinessName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setAddress1($Address1)
    {
      $this->Address1 = $Address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlaceName()
    {
      return $this->PlaceName;
    }

    /**
     * @param string $PlaceName
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setPlaceName($PlaceName)
    {
      $this->PlaceName = $PlaceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalTown()
    {
      return $this->PostalTown;
    }

    /**
     * @param string $PostalTown
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setPostalTown($PostalTown)
    {
      $this->PostalTown = $PostalTown;
      return $this;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
      return $this->County;
    }

    /**
     * @param string $County
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setCounty($County)
    {
      $this->County = $County;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
      return $this->PostCode;
    }

    /**
     * @param string $PostCode
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setPostCode($PostCode)
    {
      $this->PostCode = $PostCode;
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
     * @return \UkMail\Prod\Tracking\DomesticV1
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
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setTotalWeight($TotalWeight)
    {
      $this->TotalWeight = $TotalWeight;
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
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setServiceCode($ServiceCode)
    {
      $this->ServiceCode = $ServiceCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getCODAmount()
    {
      return $this->CODAmount;
    }

    /**
     * @param int $CODAmount
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setCODAmount($CODAmount)
    {
      $this->CODAmount = $CODAmount;
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
     * @return \UkMail\Prod\Tracking\DomesticV1
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
     * @return \UkMail\Prod\Tracking\DomesticV1
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
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setBookIn($BookIn)
    {
      $this->BookIn = $BookIn;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSwapOut()
    {
      return $this->SwapOut;
    }

    /**
     * @param boolean $SwapOut
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setSwapOut($SwapOut)
    {
      $this->SwapOut = $SwapOut;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIOD()
    {
      return $this->IOD;
    }

    /**
     * @param boolean $IOD
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setIOD($IOD)
    {
      $this->IOD = $IOD;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalPallets()
    {
      return $this->TotalPallets;
    }

    /**
     * @param int $TotalPallets
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setTotalPallets($TotalPallets)
    {
      $this->TotalPallets = $TotalPallets;
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
     * @return \UkMail\Prod\Tracking\DomesticV1
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
     * @return \UkMail\Prod\Tracking\DomesticV1
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
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setModifiedDateTime(\DateTime $ModifiedDateTime)
    {
      $this->ModifiedDateTime = $ModifiedDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseDetails1()
    {
      return $this->HouseDetails1;
    }

    /**
     * @param string $HouseDetails1
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setHouseDetails1($HouseDetails1)
    {
      $this->HouseDetails1 = $HouseDetails1;
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseDetails2()
    {
      return $this->HouseDetails2;
    }

    /**
     * @param string $HouseDetails2
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setHouseDetails2($HouseDetails2)
    {
      $this->HouseDetails2 = $HouseDetails2;
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
     * @return \UkMail\Prod\Tracking\DomesticV1
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
     * @return \UkMail\Prod\Tracking\DomesticV1
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
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setSignatureOptional($SignatureOptional)
    {
      $this->SignatureOptional = $SignatureOptional;
      return $this;
    }

    /**
     * @return string
     */
    public function getIODEmailAddress()
    {
      return $this->IODEmailAddress;
    }

    /**
     * @param string $IODEmailAddress
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setIODEmailAddress($IODEmailAddress)
    {
      $this->IODEmailAddress = $IODEmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getIODTelephone()
    {
      return $this->IODTelephone;
    }

    /**
     * @param string $IODTelephone
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setIODTelephone($IODTelephone)
    {
      $this->IODTelephone = $IODTelephone;
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
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setLongLength($LongLength)
    {
      $this->LongLength = $LongLength;
      return $this;
    }

    /**
     * @return ArrayOfDomesticSubV1
     */
    public function getDomesticSubConsignments()
    {
      return $this->DomesticSubConsignments;
    }

    /**
     * @param ArrayOfDomesticSubV1 $DomesticSubConsignments
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setDomesticSubConsignments($DomesticSubConsignments)
    {
      $this->DomesticSubConsignments = $DomesticSubConsignments;
      return $this;
    }

    /**
     * @return ArrayOfBoxV1
     */
    public function getBoxRecords()
    {
      return $this->BoxRecords;
    }

    /**
     * @param ArrayOfBoxV1 $BoxRecords
     * @return \UkMail\Prod\Tracking\DomesticV1
     */
    public function setBoxRecords($BoxRecords)
    {
      $this->BoxRecords = $BoxRecords;
      return $this;
    }

}
