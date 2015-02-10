<?php

namespace UkMail\Prod\Tracking;

class ConsignmentSearchResult
{

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    /**
     * @var string $CustomerRef1
     */
    protected $CustomerRef1 = null;

    /**
     * @var string $CustomerRef2
     */
    protected $CustomerRef2 = null;

    /**
     * @var string $SubCustomerRef1
     */
    protected $SubCustomerRef1 = null;

    /**
     * @var string $SubCustomerRef2
     */
    protected $SubCustomerRef2 = null;

    /**
     * @var string $DeliveryType
     */
    protected $DeliveryType = null;

    /**
     * @var string $ConsignmentStatus
     */
    protected $ConsignmentStatus = null;

    /**
     * @var \DateTime $DateTimeDelivered
     */
    protected $DateTimeDelivered = null;

    /**
     * @var int $ItemsDelivered
     */
    protected $ItemsDelivered = null;

    /**
     * @var string $RecipientName
     */
    protected $RecipientName = null;

    /**
     * @var string $DeliveryComments
     */
    protected $DeliveryComments = null;

    /**
     * @var \DateTime $ExpectedDeliveryDate
     */
    protected $ExpectedDeliveryDate = null;

    /**
     * @var string $DeliveryService
     */
    protected $DeliveryService = null;

    /**
     * @var int $TotalItems
     */
    protected $TotalItems = null;

    /**
     * @var float $Consignmentkey
     */
    protected $Consignmentkey = null;

    /**
     * @param string $ConsignmentNumber
     * @param string $CustomerRef1
     * @param string $CustomerRef2
     * @param string $SubCustomerRef1
     * @param string $SubCustomerRef2
     * @param string $DeliveryType
     * @param string $ConsignmentStatus
     * @param \DateTime $DateTimeDelivered
     * @param int $ItemsDelivered
     * @param string $RecipientName
     * @param string $DeliveryComments
     * @param \DateTime $ExpectedDeliveryDate
     * @param string $DeliveryService
     * @param int $TotalItems
     * @param float $Consignmentkey
     */
    public function __construct($ConsignmentNumber = null, $CustomerRef1 = null, $CustomerRef2 = null, $SubCustomerRef1 = null, $SubCustomerRef2 = null, $DeliveryType = null, $ConsignmentStatus = null, \DateTime $DateTimeDelivered = null, $ItemsDelivered = null, $RecipientName = null, $DeliveryComments = null, \DateTime $ExpectedDeliveryDate = null, $DeliveryService = null, $TotalItems = null, $Consignmentkey = null)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->CustomerRef1 = $CustomerRef1;
      $this->CustomerRef2 = $CustomerRef2;
      $this->SubCustomerRef1 = $SubCustomerRef1;
      $this->SubCustomerRef2 = $SubCustomerRef2;
      $this->DeliveryType = $DeliveryType;
      $this->ConsignmentStatus = $ConsignmentStatus;
      $this->DateTimeDelivered = $DateTimeDelivered ? $DateTimeDelivered->format(\DateTime::ATOM) : null;
      $this->ItemsDelivered = $ItemsDelivered;
      $this->RecipientName = $RecipientName;
      $this->DeliveryComments = $DeliveryComments;
      $this->ExpectedDeliveryDate = $ExpectedDeliveryDate ? $ExpectedDeliveryDate->format(\DateTime::ATOM) : null;
      $this->DeliveryService = $DeliveryService;
      $this->TotalItems = $TotalItems;
      $this->Consignmentkey = $Consignmentkey;
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
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerRef1()
    {
      return $this->CustomerRef1;
    }

    /**
     * @param string $CustomerRef1
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setCustomerRef1($CustomerRef1)
    {
      $this->CustomerRef1 = $CustomerRef1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerRef2()
    {
      return $this->CustomerRef2;
    }

    /**
     * @param string $CustomerRef2
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setCustomerRef2($CustomerRef2)
    {
      $this->CustomerRef2 = $CustomerRef2;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubCustomerRef1()
    {
      return $this->SubCustomerRef1;
    }

    /**
     * @param string $SubCustomerRef1
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setSubCustomerRef1($SubCustomerRef1)
    {
      $this->SubCustomerRef1 = $SubCustomerRef1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubCustomerRef2()
    {
      return $this->SubCustomerRef2;
    }

    /**
     * @param string $SubCustomerRef2
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setSubCustomerRef2($SubCustomerRef2)
    {
      $this->SubCustomerRef2 = $SubCustomerRef2;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryType()
    {
      return $this->DeliveryType;
    }

    /**
     * @param string $DeliveryType
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setDeliveryType($DeliveryType)
    {
      $this->DeliveryType = $DeliveryType;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentStatus()
    {
      return $this->ConsignmentStatus;
    }

    /**
     * @param string $ConsignmentStatus
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setConsignmentStatus($ConsignmentStatus)
    {
      $this->ConsignmentStatus = $ConsignmentStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTimeDelivered()
    {
      if ($this->DateTimeDelivered == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateTimeDelivered);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateTimeDelivered
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setDateTimeDelivered(\DateTime $DateTimeDelivered)
    {
      $this->DateTimeDelivered = $DateTimeDelivered->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getItemsDelivered()
    {
      return $this->ItemsDelivered;
    }

    /**
     * @param int $ItemsDelivered
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setItemsDelivered($ItemsDelivered)
    {
      $this->ItemsDelivered = $ItemsDelivered;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientName()
    {
      return $this->RecipientName;
    }

    /**
     * @param string $RecipientName
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setRecipientName($RecipientName)
    {
      $this->RecipientName = $RecipientName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryComments()
    {
      return $this->DeliveryComments;
    }

    /**
     * @param string $DeliveryComments
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setDeliveryComments($DeliveryComments)
    {
      $this->DeliveryComments = $DeliveryComments;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDeliveryDate()
    {
      if ($this->ExpectedDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpectedDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpectedDeliveryDate
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setExpectedDeliveryDate(\DateTime $ExpectedDeliveryDate)
    {
      $this->ExpectedDeliveryDate = $ExpectedDeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryService()
    {
      return $this->DeliveryService;
    }

    /**
     * @param string $DeliveryService
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setDeliveryService($DeliveryService)
    {
      $this->DeliveryService = $DeliveryService;
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
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setTotalItems($TotalItems)
    {
      $this->TotalItems = $TotalItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsignmentkey()
    {
      return $this->Consignmentkey;
    }

    /**
     * @param float $Consignmentkey
     * @return \UkMail\Prod\Tracking\ConsignmentSearchResult
     */
    public function setConsignmentkey($Consignmentkey)
    {
      $this->Consignmentkey = $Consignmentkey;
      return $this;
    }

}
