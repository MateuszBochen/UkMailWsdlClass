<?php

namespace UkMail\Prod\Tracking;

class ConsignmentTrackingGetDetailsResultV3
{

    /**
     * @var ResultState $ResultState
     */
    protected $ResultState = null;

    /**
     * @var ArrayOfError $Errors
     */
    protected $Errors = null;

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    /**
     * @var int $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $StatusMessage
     */
    protected $StatusMessage = null;

    /**
     * @var \DateTime $OriginalDelivery
     */
    protected $OriginalDelivery = null;

    /**
     * @var \DateTime $ExpectedDelivery
     */
    protected $ExpectedDelivery = null;

    /**
     * @var \DateTime $CollectionDate
     */
    protected $CollectionDate = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $PostalTown
     */
    protected $PostalTown = null;

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
     * @var boolean $SwapOut
     */
    protected $SwapOut = null;

    /**
     * @var string $ReturnConsignmentNumber
     */
    protected $ReturnConsignmentNumber = null;

    /**
     * @var string $EstimatedTimeOfArrivalStart
     */
    protected $EstimatedTimeOfArrivalStart = null;

    /**
     * @var string $EstimatedTimeOfArrivalEnd
     */
    protected $EstimatedTimeOfArrivalEnd = null;

    /**
     * @var ArrayOfGetConsignmentDetailsSub $ConsignmentSubs
     */
    protected $ConsignmentSubs = null;

    /**
     * @var ArrayOfGetConsignmentDetailsPod $ConsignmentPods
     */
    protected $ConsignmentPods = null;

    /**
     * @var ArrayOfGetConsignmentDetailsStatus $ConsignmentStatus
     */
    protected $ConsignmentStatus = null;

    /**
     * @param ResultState $ResultState
     * @param ArrayOfError $Errors
     * @param string $ConsignmentNumber
     * @param int $StatusCode
     * @param string $StatusMessage
     * @param \DateTime $OriginalDelivery
     * @param \DateTime $ExpectedDelivery
     * @param \DateTime $CollectionDate
     * @param int $Quantity
     * @param float $Weight
     * @param string $CompanyName
     * @param string $PostalTown
     * @param string $FoundConsignment
     * @param boolean $International
     * @param boolean $Mail
     * @param string $MailingID
     * @param boolean $SwapOut
     * @param string $ReturnConsignmentNumber
     * @param string $EstimatedTimeOfArrivalStart
     * @param string $EstimatedTimeOfArrivalEnd
     * @param ArrayOfGetConsignmentDetailsSub $ConsignmentSubs
     * @param ArrayOfGetConsignmentDetailsPod $ConsignmentPods
     * @param ArrayOfGetConsignmentDetailsStatus $ConsignmentStatus
     */
    public function __construct($ResultState = null, $Errors = null, $ConsignmentNumber = null, $StatusCode = null, $StatusMessage = null, \DateTime $OriginalDelivery = null, \DateTime $ExpectedDelivery = null, \DateTime $CollectionDate = null, $Quantity = null, $Weight = null, $CompanyName = null, $PostalTown = null, $FoundConsignment = null, $International = null, $Mail = null, $MailingID = null, $SwapOut = null, $ReturnConsignmentNumber = null, $EstimatedTimeOfArrivalStart = null, $EstimatedTimeOfArrivalEnd = null, $ConsignmentSubs = null, $ConsignmentPods = null, $ConsignmentStatus = null)
    {
      $this->ResultState = $ResultState;
      $this->Errors = $Errors;
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->StatusCode = $StatusCode;
      $this->StatusMessage = $StatusMessage;
      $this->OriginalDelivery = $OriginalDelivery ? $OriginalDelivery->format(\DateTime::ATOM) : null;
      $this->ExpectedDelivery = $ExpectedDelivery ? $ExpectedDelivery->format(\DateTime::ATOM) : null;
      $this->CollectionDate = $CollectionDate ? $CollectionDate->format(\DateTime::ATOM) : null;
      $this->Quantity = $Quantity;
      $this->Weight = $Weight;
      $this->CompanyName = $CompanyName;
      $this->PostalTown = $PostalTown;
      $this->FoundConsignment = $FoundConsignment;
      $this->International = $International;
      $this->Mail = $Mail;
      $this->MailingID = $MailingID;
      $this->SwapOut = $SwapOut;
      $this->ReturnConsignmentNumber = $ReturnConsignmentNumber;
      $this->EstimatedTimeOfArrivalStart = $EstimatedTimeOfArrivalStart;
      $this->EstimatedTimeOfArrivalEnd = $EstimatedTimeOfArrivalEnd;
      $this->ConsignmentSubs = $ConsignmentSubs;
      $this->ConsignmentPods = $ConsignmentPods;
      $this->ConsignmentStatus = $ConsignmentStatus;
    }

    /**
     * @return ResultState
     */
    public function getResultState()
    {
      return $this->ResultState;
    }

    /**
     * @param ResultState $ResultState
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setResultState($ResultState)
    {
      $this->ResultState = $ResultState;
      return $this;
    }

    /**
     * @return ArrayOfError
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param ArrayOfError $Errors
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setStatusMessage($StatusMessage)
    {
      $this->StatusMessage = $StatusMessage;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOriginalDelivery()
    {
      if ($this->OriginalDelivery == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OriginalDelivery);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OriginalDelivery
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setOriginalDelivery(\DateTime $OriginalDelivery)
    {
      $this->OriginalDelivery = $OriginalDelivery->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDelivery()
    {
      if ($this->ExpectedDelivery == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpectedDelivery);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpectedDelivery
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setExpectedDelivery(\DateTime $ExpectedDelivery)
    {
      $this->ExpectedDelivery = $ExpectedDelivery->format(\DateTime::ATOM);
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setCollectionDate(\DateTime $CollectionDate)
    {
      $this->CollectionDate = $CollectionDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setPostalTown($PostalTown)
    {
      $this->PostalTown = $PostalTown;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setMailingID($MailingID)
    {
      $this->MailingID = $MailingID;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setSwapOut($SwapOut)
    {
      $this->SwapOut = $SwapOut;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnConsignmentNumber()
    {
      return $this->ReturnConsignmentNumber;
    }

    /**
     * @param string $ReturnConsignmentNumber
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setReturnConsignmentNumber($ReturnConsignmentNumber)
    {
      $this->ReturnConsignmentNumber = $ReturnConsignmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimatedTimeOfArrivalStart()
    {
      return $this->EstimatedTimeOfArrivalStart;
    }

    /**
     * @param string $EstimatedTimeOfArrivalStart
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setEstimatedTimeOfArrivalStart($EstimatedTimeOfArrivalStart)
    {
      $this->EstimatedTimeOfArrivalStart = $EstimatedTimeOfArrivalStart;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimatedTimeOfArrivalEnd()
    {
      return $this->EstimatedTimeOfArrivalEnd;
    }

    /**
     * @param string $EstimatedTimeOfArrivalEnd
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setEstimatedTimeOfArrivalEnd($EstimatedTimeOfArrivalEnd)
    {
      $this->EstimatedTimeOfArrivalEnd = $EstimatedTimeOfArrivalEnd;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setConsignmentSubs($ConsignmentSubs)
    {
      $this->ConsignmentSubs = $ConsignmentSubs;
      return $this;
    }

    /**
     * @return ArrayOfGetConsignmentDetailsPod
     */
    public function getConsignmentPods()
    {
      return $this->ConsignmentPods;
    }

    /**
     * @param ArrayOfGetConsignmentDetailsPod $ConsignmentPods
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setConsignmentPods($ConsignmentPods)
    {
      $this->ConsignmentPods = $ConsignmentPods;
      return $this;
    }

    /**
     * @return ArrayOfGetConsignmentDetailsStatus
     */
    public function getConsignmentStatus()
    {
      return $this->ConsignmentStatus;
    }

    /**
     * @param ArrayOfGetConsignmentDetailsStatus $ConsignmentStatus
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetDetailsResultV3
     */
    public function setConsignmentStatus($ConsignmentStatus)
    {
      $this->ConsignmentStatus = $ConsignmentStatus;
      return $this;
    }

}
