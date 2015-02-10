<?php

namespace UkMail\Test\Tracking;

class InternationalV1
{

    /**
     * @var char $Action
     */
    protected $Action = null;

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var \DateTime $JobDate
     */
    protected $JobDate = null;

    /**
     * @var int $ServiceCode
     */
    protected $ServiceCode = null;

    /**
     * @var string $SendersName
     */
    protected $SendersName = null;

    /**
     * @var string $SendersAddress1
     */
    protected $SendersAddress1 = null;

    /**
     * @var string $SendersAddress2
     */
    protected $SendersAddress2 = null;

    /**
     * @var string $SendersAddress3
     */
    protected $SendersAddress3 = null;

    /**
     * @var string $SendersTown
     */
    protected $SendersTown = null;

    /**
     * @var string $SendersPostCode
     */
    protected $SendersPostCode = null;

    /**
     * @var string $SendersContact
     */
    protected $SendersContact = null;

    /**
     * @var string $SendersTelephone
     */
    protected $SendersTelephone = null;

    /**
     * @var string $SendersEmail
     */
    protected $SendersEmail = null;

    /**
     * @var string $SendersVATorTVANumber
     */
    protected $SendersVATorTVANumber = null;

    /**
     * @var string $DeliveryName
     */
    protected $DeliveryName = null;

    /**
     * @var string $DeliveryAddress1
     */
    protected $DeliveryAddress1 = null;

    /**
     * @var string $DeliveryAddress2
     */
    protected $DeliveryAddress2 = null;

    /**
     * @var string $DeliveryAddress3
     */
    protected $DeliveryAddress3 = null;

    /**
     * @var string $DeliveryTown
     */
    protected $DeliveryTown = null;

    /**
     * @var string $DeliveryPostCode
     */
    protected $DeliveryPostCode = null;

    /**
     * @var string $DeliveryCountryCode
     */
    protected $DeliveryCountryCode = null;

    /**
     * @var string $DeliveryContact
     */
    protected $DeliveryContact = null;

    /**
     * @var string $DeliveryTelephone
     */
    protected $DeliveryTelephone = null;

    /**
     * @var string $DeliveryEmail
     */
    protected $DeliveryEmail = null;

    /**
     * @var string $ConsigneeVATorTVANumber
     */
    protected $ConsigneeVATorTVANumber = null;

    /**
     * @var string $CustomerReference
     */
    protected $CustomerReference = null;

    /**
     * @var string $AlternativeReference
     */
    protected $AlternativeReference = null;

    /**
     * @var int $TotalItems
     */
    protected $TotalItems = null;

    /**
     * @var float $TotalWeight
     */
    protected $TotalWeight = null;

    /**
     * @var int $Length
     */
    protected $Length = null;

    /**
     * @var int $Width
     */
    protected $Width = null;

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @var float $VolumetricWeight
     */
    protected $VolumetricWeight = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var float $ValueOfGoods
     */
    protected $ValueOfGoods = null;

    /**
     * @var boolean $Documents
     */
    protected $Documents = null;

    /**
     * @var string $DescriptionOfGoods1
     */
    protected $DescriptionOfGoods1 = null;

    /**
     * @var string $DescriptionOfGoods2
     */
    protected $DescriptionOfGoods2 = null;

    /**
     * @var string $DescriptionOfGoods3
     */
    protected $DescriptionOfGoods3 = null;

    /**
     * @var string $SpecialIntructions1
     */
    protected $SpecialIntructions1 = null;

    /**
     * @var string $SpecialIntructions2
     */
    protected $SpecialIntructions2 = null;

    /**
     * @var boolean $NoDangerousGoods
     */
    protected $NoDangerousGoods = null;

    /**
     * @var boolean $InFreeCirculation
     */
    protected $InFreeCirculation = null;

    /**
     * @var boolean $ExtraInsurance
     */
    protected $ExtraInsurance = null;

    /**
     * @var boolean $IOD
     */
    protected $IOD = null;

    /**
     * @var \DateTime $ManifestDateTime
     */
    protected $ManifestDateTime = null;

    /**
     * @var string $USStateCode
     */
    protected $USStateCode = null;

    /**
     * @var string $IODEmailAddress
     */
    protected $IODEmailAddress = null;

    /**
     * @var string $IODTelephone
     */
    protected $IODTelephone = null;

    /**
     * @param char $Action
     * @param string $ConsignmentNumber
     * @param string $AccountNumber
     * @param \DateTime $JobDate
     * @param int $ServiceCode
     * @param string $SendersName
     * @param string $SendersAddress1
     * @param string $SendersAddress2
     * @param string $SendersAddress3
     * @param string $SendersTown
     * @param string $SendersPostCode
     * @param string $SendersContact
     * @param string $SendersTelephone
     * @param string $SendersEmail
     * @param string $SendersVATorTVANumber
     * @param string $DeliveryName
     * @param string $DeliveryAddress1
     * @param string $DeliveryAddress2
     * @param string $DeliveryAddress3
     * @param string $DeliveryTown
     * @param string $DeliveryPostCode
     * @param string $DeliveryCountryCode
     * @param string $DeliveryContact
     * @param string $DeliveryTelephone
     * @param string $DeliveryEmail
     * @param string $ConsigneeVATorTVANumber
     * @param string $CustomerReference
     * @param string $AlternativeReference
     * @param int $TotalItems
     * @param float $TotalWeight
     * @param int $Length
     * @param int $Width
     * @param int $Height
     * @param float $VolumetricWeight
     * @param string $CurrencyCode
     * @param float $ValueOfGoods
     * @param boolean $Documents
     * @param string $DescriptionOfGoods1
     * @param string $DescriptionOfGoods2
     * @param string $DescriptionOfGoods3
     * @param string $SpecialIntructions1
     * @param string $SpecialIntructions2
     * @param boolean $NoDangerousGoods
     * @param boolean $InFreeCirculation
     * @param boolean $ExtraInsurance
     * @param boolean $IOD
     * @param \DateTime $ManifestDateTime
     * @param string $USStateCode
     * @param string $IODEmailAddress
     * @param string $IODTelephone
     */
    public function __construct($Action = null, $ConsignmentNumber = null, $AccountNumber = null, \DateTime $JobDate = null, $ServiceCode = null, $SendersName = null, $SendersAddress1 = null, $SendersAddress2 = null, $SendersAddress3 = null, $SendersTown = null, $SendersPostCode = null, $SendersContact = null, $SendersTelephone = null, $SendersEmail = null, $SendersVATorTVANumber = null, $DeliveryName = null, $DeliveryAddress1 = null, $DeliveryAddress2 = null, $DeliveryAddress3 = null, $DeliveryTown = null, $DeliveryPostCode = null, $DeliveryCountryCode = null, $DeliveryContact = null, $DeliveryTelephone = null, $DeliveryEmail = null, $ConsigneeVATorTVANumber = null, $CustomerReference = null, $AlternativeReference = null, $TotalItems = null, $TotalWeight = null, $Length = null, $Width = null, $Height = null, $VolumetricWeight = null, $CurrencyCode = null, $ValueOfGoods = null, $Documents = null, $DescriptionOfGoods1 = null, $DescriptionOfGoods2 = null, $DescriptionOfGoods3 = null, $SpecialIntructions1 = null, $SpecialIntructions2 = null, $NoDangerousGoods = null, $InFreeCirculation = null, $ExtraInsurance = null, $IOD = null, \DateTime $ManifestDateTime = null, $USStateCode = null, $IODEmailAddress = null, $IODTelephone = null)
    {
      $this->Action = $Action;
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->AccountNumber = $AccountNumber;
      $this->JobDate = $JobDate ? $JobDate->format(\DateTime::ATOM) : null;
      $this->ServiceCode = $ServiceCode;
      $this->SendersName = $SendersName;
      $this->SendersAddress1 = $SendersAddress1;
      $this->SendersAddress2 = $SendersAddress2;
      $this->SendersAddress3 = $SendersAddress3;
      $this->SendersTown = $SendersTown;
      $this->SendersPostCode = $SendersPostCode;
      $this->SendersContact = $SendersContact;
      $this->SendersTelephone = $SendersTelephone;
      $this->SendersEmail = $SendersEmail;
      $this->SendersVATorTVANumber = $SendersVATorTVANumber;
      $this->DeliveryName = $DeliveryName;
      $this->DeliveryAddress1 = $DeliveryAddress1;
      $this->DeliveryAddress2 = $DeliveryAddress2;
      $this->DeliveryAddress3 = $DeliveryAddress3;
      $this->DeliveryTown = $DeliveryTown;
      $this->DeliveryPostCode = $DeliveryPostCode;
      $this->DeliveryCountryCode = $DeliveryCountryCode;
      $this->DeliveryContact = $DeliveryContact;
      $this->DeliveryTelephone = $DeliveryTelephone;
      $this->DeliveryEmail = $DeliveryEmail;
      $this->ConsigneeVATorTVANumber = $ConsigneeVATorTVANumber;
      $this->CustomerReference = $CustomerReference;
      $this->AlternativeReference = $AlternativeReference;
      $this->TotalItems = $TotalItems;
      $this->TotalWeight = $TotalWeight;
      $this->Length = $Length;
      $this->Width = $Width;
      $this->Height = $Height;
      $this->VolumetricWeight = $VolumetricWeight;
      $this->CurrencyCode = $CurrencyCode;
      $this->ValueOfGoods = $ValueOfGoods;
      $this->Documents = $Documents;
      $this->DescriptionOfGoods1 = $DescriptionOfGoods1;
      $this->DescriptionOfGoods2 = $DescriptionOfGoods2;
      $this->DescriptionOfGoods3 = $DescriptionOfGoods3;
      $this->SpecialIntructions1 = $SpecialIntructions1;
      $this->SpecialIntructions2 = $SpecialIntructions2;
      $this->NoDangerousGoods = $NoDangerousGoods;
      $this->InFreeCirculation = $InFreeCirculation;
      $this->ExtraInsurance = $ExtraInsurance;
      $this->IOD = $IOD;
      $this->ManifestDateTime = $ManifestDateTime ? $ManifestDateTime->format(\DateTime::ATOM) : null;
      $this->USStateCode = $USStateCode;
      $this->IODEmailAddress = $IODEmailAddress;
      $this->IODTelephone = $IODTelephone;
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
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
     * @return \UkMail\Test\Tracking\InternationalV1
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setJobDate(\DateTime $JobDate)
    {
      $this->JobDate = $JobDate->format(\DateTime::ATOM);
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setServiceCode($ServiceCode)
    {
      $this->ServiceCode = $ServiceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersName()
    {
      return $this->SendersName;
    }

    /**
     * @param string $SendersName
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSendersName($SendersName)
    {
      $this->SendersName = $SendersName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersAddress1()
    {
      return $this->SendersAddress1;
    }

    /**
     * @param string $SendersAddress1
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSendersAddress1($SendersAddress1)
    {
      $this->SendersAddress1 = $SendersAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersAddress2()
    {
      return $this->SendersAddress2;
    }

    /**
     * @param string $SendersAddress2
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSendersAddress2($SendersAddress2)
    {
      $this->SendersAddress2 = $SendersAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersAddress3()
    {
      return $this->SendersAddress3;
    }

    /**
     * @param string $SendersAddress3
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSendersAddress3($SendersAddress3)
    {
      $this->SendersAddress3 = $SendersAddress3;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersTown()
    {
      return $this->SendersTown;
    }

    /**
     * @param string $SendersTown
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSendersTown($SendersTown)
    {
      $this->SendersTown = $SendersTown;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersPostCode()
    {
      return $this->SendersPostCode;
    }

    /**
     * @param string $SendersPostCode
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSendersPostCode($SendersPostCode)
    {
      $this->SendersPostCode = $SendersPostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersContact()
    {
      return $this->SendersContact;
    }

    /**
     * @param string $SendersContact
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSendersContact($SendersContact)
    {
      $this->SendersContact = $SendersContact;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersTelephone()
    {
      return $this->SendersTelephone;
    }

    /**
     * @param string $SendersTelephone
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSendersTelephone($SendersTelephone)
    {
      $this->SendersTelephone = $SendersTelephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersEmail()
    {
      return $this->SendersEmail;
    }

    /**
     * @param string $SendersEmail
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSendersEmail($SendersEmail)
    {
      $this->SendersEmail = $SendersEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendersVATorTVANumber()
    {
      return $this->SendersVATorTVANumber;
    }

    /**
     * @param string $SendersVATorTVANumber
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSendersVATorTVANumber($SendersVATorTVANumber)
    {
      $this->SendersVATorTVANumber = $SendersVATorTVANumber;
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDeliveryName($DeliveryName)
    {
      $this->DeliveryName = $DeliveryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress1()
    {
      return $this->DeliveryAddress1;
    }

    /**
     * @param string $DeliveryAddress1
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDeliveryAddress1($DeliveryAddress1)
    {
      $this->DeliveryAddress1 = $DeliveryAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress2()
    {
      return $this->DeliveryAddress2;
    }

    /**
     * @param string $DeliveryAddress2
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDeliveryAddress2($DeliveryAddress2)
    {
      $this->DeliveryAddress2 = $DeliveryAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress3()
    {
      return $this->DeliveryAddress3;
    }

    /**
     * @param string $DeliveryAddress3
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDeliveryAddress3($DeliveryAddress3)
    {
      $this->DeliveryAddress3 = $DeliveryAddress3;
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDeliveryTown($DeliveryTown)
    {
      $this->DeliveryTown = $DeliveryTown;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryPostCode()
    {
      return $this->DeliveryPostCode;
    }

    /**
     * @param string $DeliveryPostCode
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDeliveryPostCode($DeliveryPostCode)
    {
      $this->DeliveryPostCode = $DeliveryPostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCountryCode()
    {
      return $this->DeliveryCountryCode;
    }

    /**
     * @param string $DeliveryCountryCode
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDeliveryCountryCode($DeliveryCountryCode)
    {
      $this->DeliveryCountryCode = $DeliveryCountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryContact()
    {
      return $this->DeliveryContact;
    }

    /**
     * @param string $DeliveryContact
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDeliveryContact($DeliveryContact)
    {
      $this->DeliveryContact = $DeliveryContact;
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDeliveryTelephone($DeliveryTelephone)
    {
      $this->DeliveryTelephone = $DeliveryTelephone;
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDeliveryEmail($DeliveryEmail)
    {
      $this->DeliveryEmail = $DeliveryEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeVATorTVANumber()
    {
      return $this->ConsigneeVATorTVANumber;
    }

    /**
     * @param string $ConsigneeVATorTVANumber
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setConsigneeVATorTVANumber($ConsigneeVATorTVANumber)
    {
      $this->ConsigneeVATorTVANumber = $ConsigneeVATorTVANumber;
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
     * @return \UkMail\Test\Tracking\InternationalV1
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setAlternativeReference($AlternativeReference)
    {
      $this->AlternativeReference = $AlternativeReference;
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
     * @return \UkMail\Test\Tracking\InternationalV1
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setTotalWeight($TotalWeight)
    {
      $this->TotalWeight = $TotalWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param int $Length
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolumetricWeight()
    {
      return $this->VolumetricWeight;
    }

    /**
     * @param float $VolumetricWeight
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setVolumetricWeight($VolumetricWeight)
    {
      $this->VolumetricWeight = $VolumetricWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setValueOfGoods($ValueOfGoods)
    {
      $this->ValueOfGoods = $ValueOfGoods;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDocuments()
    {
      return $this->Documents;
    }

    /**
     * @param boolean $Documents
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDocuments($Documents)
    {
      $this->Documents = $Documents;
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
     * @return \UkMail\Test\Tracking\InternationalV1
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDescriptionOfGoods2($DescriptionOfGoods2)
    {
      $this->DescriptionOfGoods2 = $DescriptionOfGoods2;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionOfGoods3()
    {
      return $this->DescriptionOfGoods3;
    }

    /**
     * @param string $DescriptionOfGoods3
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setDescriptionOfGoods3($DescriptionOfGoods3)
    {
      $this->DescriptionOfGoods3 = $DescriptionOfGoods3;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialIntructions1()
    {
      return $this->SpecialIntructions1;
    }

    /**
     * @param string $SpecialIntructions1
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSpecialIntructions1($SpecialIntructions1)
    {
      $this->SpecialIntructions1 = $SpecialIntructions1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialIntructions2()
    {
      return $this->SpecialIntructions2;
    }

    /**
     * @param string $SpecialIntructions2
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setSpecialIntructions2($SpecialIntructions2)
    {
      $this->SpecialIntructions2 = $SpecialIntructions2;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNoDangerousGoods()
    {
      return $this->NoDangerousGoods;
    }

    /**
     * @param boolean $NoDangerousGoods
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setNoDangerousGoods($NoDangerousGoods)
    {
      $this->NoDangerousGoods = $NoDangerousGoods;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInFreeCirculation()
    {
      return $this->InFreeCirculation;
    }

    /**
     * @param boolean $InFreeCirculation
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setInFreeCirculation($InFreeCirculation)
    {
      $this->InFreeCirculation = $InFreeCirculation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExtraInsurance()
    {
      return $this->ExtraInsurance;
    }

    /**
     * @param boolean $ExtraInsurance
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setExtraInsurance($ExtraInsurance)
    {
      $this->ExtraInsurance = $ExtraInsurance;
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setIOD($IOD)
    {
      $this->IOD = $IOD;
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setManifestDateTime(\DateTime $ManifestDateTime)
    {
      $this->ManifestDateTime = $ManifestDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getUSStateCode()
    {
      return $this->USStateCode;
    }

    /**
     * @param string $USStateCode
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setUSStateCode($USStateCode)
    {
      $this->USStateCode = $USStateCode;
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
     * @return \UkMail\Test\Tracking\InternationalV1
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
     * @return \UkMail\Test\Tracking\InternationalV1
     */
    public function setIODTelephone($IODTelephone)
    {
      $this->IODTelephone = $IODTelephone;
      return $this;
    }

}
