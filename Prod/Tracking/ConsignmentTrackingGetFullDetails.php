<?php

namespace UkMail\Prod\Tracking;

class ConsignmentTrackingGetFullDetails
{

    /**
     * @var GetConsignmentStatus $consignmentStatus
     */
    protected $consignmentStatus = null;

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    /**
     * @var \DateTime $CollectionDate
     */
    protected $CollectionDate = null;

    /**
     * @var float $WeightDeclared
     */
    protected $WeightDeclared = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $CollectionLocation
     */
    protected $CollectionLocation = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var string $DeliveryName
     */
    protected $DeliveryName = null;

    /**
     * @var string $DeliveryLine1
     */
    protected $DeliveryLine1 = null;

    /**
     * @var string $DeliveryLine2
     */
    protected $DeliveryLine2 = null;

    /**
     * @var string $DeliveryLine3
     */
    protected $DeliveryLine3 = null;

    /**
     * @var string $DeliveryTown
     */
    protected $DeliveryTown = null;

    /**
     * @var string $DeliveryCountry
     */
    protected $DeliveryCountry = null;

    /**
     * @var string $DeliveryPostcode
     */
    protected $DeliveryPostcode = null;

    /**
     * @var string $DeliveryZip
     */
    protected $DeliveryZip = null;

    /**
     * @var string $ServiceA
     */
    protected $ServiceA = null;

    /**
     * @var string $IODStatus
     */
    protected $IODStatus = null;

    /**
     * @var int $QuantityDeclared
     */
    protected $QuantityDeclared = null;

    /**
     * @var int $QuantityMeasured
     */
    protected $QuantityMeasured = null;

    /**
     * @var float $WeightMeasured
     */
    protected $WeightMeasured = null;

    /**
     * @var int $PalletsDeclared
     */
    protected $PalletsDeclared = null;

    /**
     * @var float $VolumeWeightMeasured
     */
    protected $VolumeWeightMeasured = null;

    /**
     * @var string $DescriptionOfGoods
     */
    protected $DescriptionOfGoods = null;

    /**
     * @var float $ValueOfGoods
     */
    protected $ValueOfGoods = null;

    /**
     * @var string $SecureLocation
     */
    protected $SecureLocation = null;

    /**
     * @var string $HouseDetails
     */
    protected $HouseDetails = null;

    /**
     * @var boolean $opl_SignatureOptional
     */
    protected $opl_SignatureOptional = null;

    /**
     * @var boolean $opl_TPCFlag
     */
    protected $opl_TPCFlag = null;

    /**
     * @var \DateTime $TPCCollectionDate
     */
    protected $TPCCollectionDate = null;

    /**
     * @var string $TPCDescOfGoods
     */
    protected $TPCDescOfGoods = null;

    /**
     * @var \DateTime $TPCActualCollection
     */
    protected $TPCActualCollection = null;

    /**
     * @var int $TPCCollectionQuantity
     */
    protected $TPCCollectionQuantity = null;

    /**
     * @var float $TPCCollectionWeight
     */
    protected $TPCCollectionWeight = null;

    /**
     * @var string $Spare1
     */
    protected $Spare1 = null;

    /**
     * @var string $Spare2
     */
    protected $Spare2 = null;

    /**
     * @var string $Spare3
     */
    protected $Spare3 = null;

    /**
     * @var string $Spare4
     */
    protected $Spare4 = null;

    /**
     * @var string $FoundConsignment
     */
    protected $FoundConsignment = null;

    /**
     * @var boolean $International
     */
    protected $International = null;

    /**
     * @var boolean $Mail
     */
    protected $Mail = null;

    /**
     * @var string $MailingID
     */
    protected $MailingID = null;

    /**
     * @var ArrayOfGetConsignmentDetailsSub $ConsignmentSubs
     */
    protected $ConsignmentSubs = null;

    /**
     * @var ArrayOfGetFullConsignmentDetailsPod $ConsignmentPods
     */
    protected $ConsignmentPods = null;

    /**
     * @var ArrayOfGetConsignmentDetailsStatus $ConsignmentStatuses
     */
    protected $ConsignmentStatuses = null;

    /**
     * @var ArrayOfConsignmentScan $ConsignmentScans
     */
    protected $ConsignmentScans = null;

    /**
     * @var ArrayOfConsignmentDiscrepency $ConsignmentDiscrepencies
     */
    protected $ConsignmentDiscrepencies = null;

    /**
     * @var ArrayOfConsignmentNote $ConsignmentNotes
     */
    protected $ConsignmentNotes = null;

    /**
     * @var ArrayOfConsignmentPOC $ConsignmentPocs
     */
    protected $ConsignmentPocs = null;

    /**
     * @var ArrayOfSignatureDetails $Signatures
     */
    protected $Signatures = null;

    /**
     * @param GetConsignmentStatus $consignmentStatus
     * @param string $ConsignmentNumber
     * @param \DateTime $CollectionDate
     * @param float $WeightDeclared
     * @param string $CompanyName
     * @param string $CollectionLocation
     * @param string $AccountNumber
     * @param string $DeliveryName
     * @param string $DeliveryLine1
     * @param string $DeliveryLine2
     * @param string $DeliveryLine3
     * @param string $DeliveryTown
     * @param string $DeliveryCountry
     * @param string $DeliveryPostcode
     * @param string $DeliveryZip
     * @param string $ServiceA
     * @param string $IODStatus
     * @param int $QuantityDeclared
     * @param int $QuantityMeasured
     * @param float $WeightMeasured
     * @param int $PalletsDeclared
     * @param float $VolumeWeightMeasured
     * @param string $DescriptionOfGoods
     * @param float $ValueOfGoods
     * @param string $SecureLocation
     * @param string $HouseDetails
     * @param boolean $opl_SignatureOptional
     * @param boolean $opl_TPCFlag
     * @param \DateTime $TPCCollectionDate
     * @param string $TPCDescOfGoods
     * @param \DateTime $TPCActualCollection
     * @param int $TPCCollectionQuantity
     * @param float $TPCCollectionWeight
     * @param string $Spare1
     * @param string $Spare2
     * @param string $Spare3
     * @param string $Spare4
     * @param string $FoundConsignment
     * @param boolean $International
     * @param boolean $Mail
     * @param string $MailingID
     * @param ArrayOfGetConsignmentDetailsSub $ConsignmentSubs
     * @param ArrayOfGetFullConsignmentDetailsPod $ConsignmentPods
     * @param ArrayOfGetConsignmentDetailsStatus $ConsignmentStatuses
     * @param ArrayOfConsignmentScan $ConsignmentScans
     * @param ArrayOfConsignmentDiscrepency $ConsignmentDiscrepencies
     * @param ArrayOfConsignmentNote $ConsignmentNotes
     * @param ArrayOfConsignmentPOC $ConsignmentPocs
     * @param ArrayOfSignatureDetails $Signatures
     */
    public function __construct($consignmentStatus = null, $ConsignmentNumber = null, \DateTime $CollectionDate = null, $WeightDeclared = null, $CompanyName = null, $CollectionLocation = null, $AccountNumber = null, $DeliveryName = null, $DeliveryLine1 = null, $DeliveryLine2 = null, $DeliveryLine3 = null, $DeliveryTown = null, $DeliveryCountry = null, $DeliveryPostcode = null, $DeliveryZip = null, $ServiceA = null, $IODStatus = null, $QuantityDeclared = null, $QuantityMeasured = null, $WeightMeasured = null, $PalletsDeclared = null, $VolumeWeightMeasured = null, $DescriptionOfGoods = null, $ValueOfGoods = null, $SecureLocation = null, $HouseDetails = null, $opl_SignatureOptional = null, $opl_TPCFlag = null, \DateTime $TPCCollectionDate = null, $TPCDescOfGoods = null, \DateTime $TPCActualCollection = null, $TPCCollectionQuantity = null, $TPCCollectionWeight = null, $Spare1 = null, $Spare2 = null, $Spare3 = null, $Spare4 = null, $FoundConsignment = null, $International = null, $Mail = null, $MailingID = null, $ConsignmentSubs = null, $ConsignmentPods = null, $ConsignmentStatuses = null, $ConsignmentScans = null, $ConsignmentDiscrepencies = null, $ConsignmentNotes = null, $ConsignmentPocs = null, $Signatures = null)
    {
      $this->consignmentStatus = $consignmentStatus;
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->CollectionDate = $CollectionDate ? $CollectionDate->format(\DateTime::ATOM) : null;
      $this->WeightDeclared = $WeightDeclared;
      $this->CompanyName = $CompanyName;
      $this->CollectionLocation = $CollectionLocation;
      $this->AccountNumber = $AccountNumber;
      $this->DeliveryName = $DeliveryName;
      $this->DeliveryLine1 = $DeliveryLine1;
      $this->DeliveryLine2 = $DeliveryLine2;
      $this->DeliveryLine3 = $DeliveryLine3;
      $this->DeliveryTown = $DeliveryTown;
      $this->DeliveryCountry = $DeliveryCountry;
      $this->DeliveryPostcode = $DeliveryPostcode;
      $this->DeliveryZip = $DeliveryZip;
      $this->ServiceA = $ServiceA;
      $this->IODStatus = $IODStatus;
      $this->QuantityDeclared = $QuantityDeclared;
      $this->QuantityMeasured = $QuantityMeasured;
      $this->WeightMeasured = $WeightMeasured;
      $this->PalletsDeclared = $PalletsDeclared;
      $this->VolumeWeightMeasured = $VolumeWeightMeasured;
      $this->DescriptionOfGoods = $DescriptionOfGoods;
      $this->ValueOfGoods = $ValueOfGoods;
      $this->SecureLocation = $SecureLocation;
      $this->HouseDetails = $HouseDetails;
      $this->opl_SignatureOptional = $opl_SignatureOptional;
      $this->opl_TPCFlag = $opl_TPCFlag;
      $this->TPCCollectionDate = $TPCCollectionDate ? $TPCCollectionDate->format(\DateTime::ATOM) : null;
      $this->TPCDescOfGoods = $TPCDescOfGoods;
      $this->TPCActualCollection = $TPCActualCollection ? $TPCActualCollection->format(\DateTime::ATOM) : null;
      $this->TPCCollectionQuantity = $TPCCollectionQuantity;
      $this->TPCCollectionWeight = $TPCCollectionWeight;
      $this->Spare1 = $Spare1;
      $this->Spare2 = $Spare2;
      $this->Spare3 = $Spare3;
      $this->Spare4 = $Spare4;
      $this->FoundConsignment = $FoundConsignment;
      $this->International = $International;
      $this->Mail = $Mail;
      $this->MailingID = $MailingID;
      $this->ConsignmentSubs = $ConsignmentSubs;
      $this->ConsignmentPods = $ConsignmentPods;
      $this->ConsignmentStatuses = $ConsignmentStatuses;
      $this->ConsignmentScans = $ConsignmentScans;
      $this->ConsignmentDiscrepencies = $ConsignmentDiscrepencies;
      $this->ConsignmentNotes = $ConsignmentNotes;
      $this->ConsignmentPocs = $ConsignmentPocs;
      $this->Signatures = $Signatures;
    }

    /**
     * @return GetConsignmentStatus
     */
    public function getConsignmentStatus()
    {
      return $this->consignmentStatus;
    }

    /**
     * @param GetConsignmentStatus $consignmentStatus
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setConsignmentStatus($consignmentStatus)
    {
      $this->consignmentStatus = $consignmentStatus;
      return $this;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setCollectionDate(\DateTime $CollectionDate)
    {
      $this->CollectionDate = $CollectionDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getWeightDeclared()
    {
      return $this->WeightDeclared;
    }

    /**
     * @param float $WeightDeclared
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setWeightDeclared($WeightDeclared)
    {
      $this->WeightDeclared = $WeightDeclared;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectionLocation()
    {
      return $this->CollectionLocation;
    }

    /**
     * @param string $CollectionLocation
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setCollectionLocation($CollectionLocation)
    {
      $this->CollectionLocation = $CollectionLocation;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryName()
    {
      return $this->DeliveryName;
    }

    /**
     * @param string $DeliveryName
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setDeliveryName($DeliveryName)
    {
      $this->DeliveryName = $DeliveryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryLine1()
    {
      return $this->DeliveryLine1;
    }

    /**
     * @param string $DeliveryLine1
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setDeliveryLine1($DeliveryLine1)
    {
      $this->DeliveryLine1 = $DeliveryLine1;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryLine2()
    {
      return $this->DeliveryLine2;
    }

    /**
     * @param string $DeliveryLine2
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setDeliveryLine2($DeliveryLine2)
    {
      $this->DeliveryLine2 = $DeliveryLine2;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryLine3()
    {
      return $this->DeliveryLine3;
    }

    /**
     * @param string $DeliveryLine3
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setDeliveryLine3($DeliveryLine3)
    {
      $this->DeliveryLine3 = $DeliveryLine3;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryTown()
    {
      return $this->DeliveryTown;
    }

    /**
     * @param string $DeliveryTown
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setDeliveryTown($DeliveryTown)
    {
      $this->DeliveryTown = $DeliveryTown;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCountry()
    {
      return $this->DeliveryCountry;
    }

    /**
     * @param string $DeliveryCountry
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setDeliveryCountry($DeliveryCountry)
    {
      $this->DeliveryCountry = $DeliveryCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryPostcode()
    {
      return $this->DeliveryPostcode;
    }

    /**
     * @param string $DeliveryPostcode
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setDeliveryPostcode($DeliveryPostcode)
    {
      $this->DeliveryPostcode = $DeliveryPostcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryZip()
    {
      return $this->DeliveryZip;
    }

    /**
     * @param string $DeliveryZip
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setDeliveryZip($DeliveryZip)
    {
      $this->DeliveryZip = $DeliveryZip;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceA()
    {
      return $this->ServiceA;
    }

    /**
     * @param string $ServiceA
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setServiceA($ServiceA)
    {
      $this->ServiceA = $ServiceA;
      return $this;
    }

    /**
     * @return string
     */
    public function getIODStatus()
    {
      return $this->IODStatus;
    }

    /**
     * @param string $IODStatus
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setIODStatus($IODStatus)
    {
      $this->IODStatus = $IODStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityDeclared()
    {
      return $this->QuantityDeclared;
    }

    /**
     * @param int $QuantityDeclared
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setQuantityDeclared($QuantityDeclared)
    {
      $this->QuantityDeclared = $QuantityDeclared;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityMeasured()
    {
      return $this->QuantityMeasured;
    }

    /**
     * @param int $QuantityMeasured
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setQuantityMeasured($QuantityMeasured)
    {
      $this->QuantityMeasured = $QuantityMeasured;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeightMeasured()
    {
      return $this->WeightMeasured;
    }

    /**
     * @param float $WeightMeasured
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setWeightMeasured($WeightMeasured)
    {
      $this->WeightMeasured = $WeightMeasured;
      return $this;
    }

    /**
     * @return int
     */
    public function getPalletsDeclared()
    {
      return $this->PalletsDeclared;
    }

    /**
     * @param int $PalletsDeclared
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setPalletsDeclared($PalletsDeclared)
    {
      $this->PalletsDeclared = $PalletsDeclared;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolumeWeightMeasured()
    {
      return $this->VolumeWeightMeasured;
    }

    /**
     * @param float $VolumeWeightMeasured
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setVolumeWeightMeasured($VolumeWeightMeasured)
    {
      $this->VolumeWeightMeasured = $VolumeWeightMeasured;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionOfGoods()
    {
      return $this->DescriptionOfGoods;
    }

    /**
     * @param string $DescriptionOfGoods
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setDescriptionOfGoods($DescriptionOfGoods)
    {
      $this->DescriptionOfGoods = $DescriptionOfGoods;
      return $this;
    }

    /**
     * @return float
     */
    public function getValueOfGoods()
    {
      return $this->ValueOfGoods;
    }

    /**
     * @param float $ValueOfGoods
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setValueOfGoods($ValueOfGoods)
    {
      $this->ValueOfGoods = $ValueOfGoods;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecureLocation()
    {
      return $this->SecureLocation;
    }

    /**
     * @param string $SecureLocation
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setSecureLocation($SecureLocation)
    {
      $this->SecureLocation = $SecureLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseDetails()
    {
      return $this->HouseDetails;
    }

    /**
     * @param string $HouseDetails
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setHouseDetails($HouseDetails)
    {
      $this->HouseDetails = $HouseDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOpl_SignatureOptional()
    {
      return $this->opl_SignatureOptional;
    }

    /**
     * @param boolean $opl_SignatureOptional
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setOpl_SignatureOptional($opl_SignatureOptional)
    {
      $this->opl_SignatureOptional = $opl_SignatureOptional;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOpl_TPCFlag()
    {
      return $this->opl_TPCFlag;
    }

    /**
     * @param boolean $opl_TPCFlag
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setOpl_TPCFlag($opl_TPCFlag)
    {
      $this->opl_TPCFlag = $opl_TPCFlag;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTPCCollectionDate()
    {
      if ($this->TPCCollectionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TPCCollectionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TPCCollectionDate
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setTPCCollectionDate(\DateTime $TPCCollectionDate)
    {
      $this->TPCCollectionDate = $TPCCollectionDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getTPCDescOfGoods()
    {
      return $this->TPCDescOfGoods;
    }

    /**
     * @param string $TPCDescOfGoods
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setTPCDescOfGoods($TPCDescOfGoods)
    {
      $this->TPCDescOfGoods = $TPCDescOfGoods;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTPCActualCollection()
    {
      if ($this->TPCActualCollection == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TPCActualCollection);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TPCActualCollection
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setTPCActualCollection(\DateTime $TPCActualCollection)
    {
      $this->TPCActualCollection = $TPCActualCollection->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getTPCCollectionQuantity()
    {
      return $this->TPCCollectionQuantity;
    }

    /**
     * @param int $TPCCollectionQuantity
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setTPCCollectionQuantity($TPCCollectionQuantity)
    {
      $this->TPCCollectionQuantity = $TPCCollectionQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getTPCCollectionWeight()
    {
      return $this->TPCCollectionWeight;
    }

    /**
     * @param float $TPCCollectionWeight
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setTPCCollectionWeight($TPCCollectionWeight)
    {
      $this->TPCCollectionWeight = $TPCCollectionWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpare1()
    {
      return $this->Spare1;
    }

    /**
     * @param string $Spare1
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setSpare1($Spare1)
    {
      $this->Spare1 = $Spare1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpare2()
    {
      return $this->Spare2;
    }

    /**
     * @param string $Spare2
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setSpare2($Spare2)
    {
      $this->Spare2 = $Spare2;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpare3()
    {
      return $this->Spare3;
    }

    /**
     * @param string $Spare3
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setSpare3($Spare3)
    {
      $this->Spare3 = $Spare3;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpare4()
    {
      return $this->Spare4;
    }

    /**
     * @param string $Spare4
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setSpare4($Spare4)
    {
      $this->Spare4 = $Spare4;
      return $this;
    }

    /**
     * @return string
     */
    public function getFoundConsignment()
    {
      return $this->FoundConsignment;
    }

    /**
     * @param string $FoundConsignment
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setFoundConsignment($FoundConsignment)
    {
      $this->FoundConsignment = $FoundConsignment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInternational()
    {
      return $this->International;
    }

    /**
     * @param boolean $International
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setInternational($International)
    {
      $this->International = $International;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMail()
    {
      return $this->Mail;
    }

    /**
     * @param boolean $Mail
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setMail($Mail)
    {
      $this->Mail = $Mail;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailingID()
    {
      return $this->MailingID;
    }

    /**
     * @param string $MailingID
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setMailingID($MailingID)
    {
      $this->MailingID = $MailingID;
      return $this;
    }

    /**
     * @return ArrayOfGetConsignmentDetailsSub
     */
    public function getConsignmentSubs()
    {
      return $this->ConsignmentSubs;
    }

    /**
     * @param ArrayOfGetConsignmentDetailsSub $ConsignmentSubs
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setConsignmentSubs($ConsignmentSubs)
    {
      $this->ConsignmentSubs = $ConsignmentSubs;
      return $this;
    }

    /**
     * @return ArrayOfGetFullConsignmentDetailsPod
     */
    public function getConsignmentPods()
    {
      return $this->ConsignmentPods;
    }

    /**
     * @param ArrayOfGetFullConsignmentDetailsPod $ConsignmentPods
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setConsignmentPods($ConsignmentPods)
    {
      $this->ConsignmentPods = $ConsignmentPods;
      return $this;
    }

    /**
     * @return ArrayOfGetConsignmentDetailsStatus
     */
    public function getConsignmentStatuses()
    {
      return $this->ConsignmentStatuses;
    }

    /**
     * @param ArrayOfGetConsignmentDetailsStatus $ConsignmentStatuses
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setConsignmentStatuses($ConsignmentStatuses)
    {
      $this->ConsignmentStatuses = $ConsignmentStatuses;
      return $this;
    }

    /**
     * @return ArrayOfConsignmentScan
     */
    public function getConsignmentScans()
    {
      return $this->ConsignmentScans;
    }

    /**
     * @param ArrayOfConsignmentScan $ConsignmentScans
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setConsignmentScans($ConsignmentScans)
    {
      $this->ConsignmentScans = $ConsignmentScans;
      return $this;
    }

    /**
     * @return ArrayOfConsignmentDiscrepency
     */
    public function getConsignmentDiscrepencies()
    {
      return $this->ConsignmentDiscrepencies;
    }

    /**
     * @param ArrayOfConsignmentDiscrepency $ConsignmentDiscrepencies
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setConsignmentDiscrepencies($ConsignmentDiscrepencies)
    {
      $this->ConsignmentDiscrepencies = $ConsignmentDiscrepencies;
      return $this;
    }

    /**
     * @return ArrayOfConsignmentNote
     */
    public function getConsignmentNotes()
    {
      return $this->ConsignmentNotes;
    }

    /**
     * @param ArrayOfConsignmentNote $ConsignmentNotes
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setConsignmentNotes($ConsignmentNotes)
    {
      $this->ConsignmentNotes = $ConsignmentNotes;
      return $this;
    }

    /**
     * @return ArrayOfConsignmentPOC
     */
    public function getConsignmentPocs()
    {
      return $this->ConsignmentPocs;
    }

    /**
     * @param ArrayOfConsignmentPOC $ConsignmentPocs
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setConsignmentPocs($ConsignmentPocs)
    {
      $this->ConsignmentPocs = $ConsignmentPocs;
      return $this;
    }

    /**
     * @return ArrayOfSignatureDetails
     */
    public function getSignatures()
    {
      return $this->Signatures;
    }

    /**
     * @param ArrayOfSignatureDetails $Signatures
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetails
     */
    public function setSignatures($Signatures)
    {
      $this->Signatures = $Signatures;
      return $this;
    }

}
