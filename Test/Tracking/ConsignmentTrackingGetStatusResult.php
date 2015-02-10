<?php

namespace UkMail\Test\Tracking;

class ConsignmentTrackingGetStatusResult
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
     * @var ArrayOfGetConsignmentStatus $ConsignmentStatus
     */
    protected $ConsignmentStatus = null;

    /**
     * @param ResultState $ResultState
     * @param ArrayOfError $Errors
     * @param string $ConsignmentNumber
     * @param string $FoundConsignment
     * @param boolean $International
     * @param boolean $Mail
     * @param string $MailingID
     * @param ArrayOfGetConsignmentStatus $ConsignmentStatus
     */
    public function __construct($ResultState = null, $Errors = null, $ConsignmentNumber = null, $FoundConsignment = null, $International = null, $Mail = null, $MailingID = null, $ConsignmentStatus = null)
    {
      $this->ResultState = $ResultState;
      $this->Errors = $Errors;
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->FoundConsignment = $FoundConsignment;
      $this->International = $International;
      $this->Mail = $Mail;
      $this->MailingID = $MailingID;
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
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetStatusResult
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
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetStatusResult
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
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetStatusResult
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
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
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetStatusResult
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
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetStatusResult
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
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetStatusResult
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
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetStatusResult
     */
    public function setMailingID($MailingID)
    {
      $this->MailingID = $MailingID;
      return $this;
    }

    /**
     * @return ArrayOfGetConsignmentStatus
     */
    public function getConsignmentStatus()
    {
      return $this->ConsignmentStatus;
    }

    /**
     * @param ArrayOfGetConsignmentStatus $ConsignmentStatus
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetStatusResult
     */
    public function setConsignmentStatus($ConsignmentStatus)
    {
      $this->ConsignmentStatus = $ConsignmentStatus;
      return $this;
    }

}
