<?php

namespace UkMail\Prod\Despatching;

class AddConsignmentDeferredWebRequest extends WebRequest
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var AddressWebModel $Address
     */
    protected $Address = null;

    /**
     * @var string $AlternativeRef
     */
    protected $AlternativeRef = null;

    /**
     * @var string $BusinessName
     */
    protected $BusinessName = null;

    /**
     * @var \DateTime $CollectionDate
     */
    protected $CollectionDate = null;

    /**
     * @var boolean $ConfirmationOfDelivery
     */
    protected $ConfirmationOfDelivery = null;

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

    /**
     * @var string $CustomersRef
     */
    protected $CustomersRef = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var int $Items
     */
    protected $Items = null;

    /**
     * @var LabelFormatType $LabelFormat
     */
    protected $LabelFormat = null;

    /**
     * @var int $ServiceKey
     */
    protected $ServiceKey = null;

    /**
     * @var string $SpecialInstructions1
     */
    protected $SpecialInstructions1 = null;

    /**
     * @var string $SpecialInstructions2
     */
    protected $SpecialInstructions2 = null;

    /**
     * @var string $Telephone
     */
    protected $Telephone = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @param \DateTime $CollectionDate
     * @param boolean $ConfirmationOfDelivery
     * @param int $Items
     * @param LabelFormatType $LabelFormat
     * @param int $ServiceKey
     * @param float $Weight
     */
    public function __construct(\DateTime $CollectionDate = null, $ConfirmationOfDelivery = null, $Items = null, $LabelFormat = null, $ServiceKey = null, $Weight = null)
    {
      parent::__construct();
      $this->CollectionDate = $CollectionDate ? $CollectionDate->format(\DateTime::ATOM) : null;
      $this->ConfirmationOfDelivery = $ConfirmationOfDelivery;
      $this->Items = $Items;
      $this->LabelFormat = $LabelFormat;
      $this->ServiceKey = $ServiceKey;
      $this->Weight = $Weight;
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
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return AddressWebModel
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AddressWebModel $Address
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
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
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setAlternativeRef($AlternativeRef)
    {
      $this->AlternativeRef = $AlternativeRef;
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
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setBusinessName($BusinessName)
    {
      $this->BusinessName = $BusinessName;
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
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setCollectionDate(\DateTime $CollectionDate)
    {
      $this->CollectionDate = $CollectionDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConfirmationOfDelivery()
    {
      return $this->ConfirmationOfDelivery;
    }

    /**
     * @param boolean $ConfirmationOfDelivery
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setConfirmationOfDelivery($ConfirmationOfDelivery)
    {
      $this->ConfirmationOfDelivery = $ConfirmationOfDelivery;
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
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setContactName($ContactName)
    {
      $this->ContactName = $ContactName;
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
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setCustomersRef($CustomersRef)
    {
      $this->CustomersRef = $CustomersRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return int
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param int $Items
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

    /**
     * @return LabelFormatType
     */
    public function getLabelFormat()
    {
      return $this->LabelFormat;
    }

    /**
     * @param LabelFormatType $LabelFormat
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setLabelFormat($LabelFormat)
    {
      $this->LabelFormat = $LabelFormat;
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
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setServiceKey($ServiceKey)
    {
      $this->ServiceKey = $ServiceKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialInstructions1()
    {
      return $this->SpecialInstructions1;
    }

    /**
     * @param string $SpecialInstructions1
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setSpecialInstructions1($SpecialInstructions1)
    {
      $this->SpecialInstructions1 = $SpecialInstructions1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialInstructions2()
    {
      return $this->SpecialInstructions2;
    }

    /**
     * @param string $SpecialInstructions2
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setSpecialInstructions2($SpecialInstructions2)
    {
      $this->SpecialInstructions2 = $SpecialInstructions2;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
      return $this->Telephone;
    }

    /**
     * @param string $Telephone
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setTelephone($Telephone)
    {
      $this->Telephone = $Telephone;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return \UkMail\Prod\Despatching\AddConsignmentDeferredWebRequest
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

}
