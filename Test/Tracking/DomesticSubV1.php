<?php

namespace UkMail\Test\Tracking;

class DomesticSubV1
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
     * @var int $StartParcelNumber
     */
    protected $StartParcelNumber = null;

    /**
     * @var int $FinalParcelNumber
     */
    protected $FinalParcelNumber = null;

    /**
     * @var int $SubConsignmentWeight
     */
    protected $SubConsignmentWeight = null;

    /**
     * @var string $CustomerReference
     */
    protected $CustomerReference = null;

    /**
     * @var string $AlternativeReference
     */
    protected $AlternativeReference = null;

    /**
     * @var string $SpecialInstructions1
     */
    protected $SpecialInstructions1 = null;

    /**
     * @var string $SpecialInstructions2
     */
    protected $SpecialInstructions2 = null;

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

    /**
     * @var string $TelephoneNumber
     */
    protected $TelephoneNumber = null;

    /**
     * @var string $EmailAddress
     */
    protected $EmailAddress = null;

    /**
     * @param string $ConsignmentNumber
     * @param char $Action
     * @param int $StartParcelNumber
     * @param int $FinalParcelNumber
     * @param int $SubConsignmentWeight
     * @param string $CustomerReference
     * @param string $AlternativeReference
     * @param string $SpecialInstructions1
     * @param string $SpecialInstructions2
     * @param string $ContactName
     * @param string $TelephoneNumber
     * @param string $EmailAddress
     */
    public function __construct($ConsignmentNumber = null, $Action = null, $StartParcelNumber = null, $FinalParcelNumber = null, $SubConsignmentWeight = null, $CustomerReference = null, $AlternativeReference = null, $SpecialInstructions1 = null, $SpecialInstructions2 = null, $ContactName = null, $TelephoneNumber = null, $EmailAddress = null)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->Action = $Action;
      $this->StartParcelNumber = $StartParcelNumber;
      $this->FinalParcelNumber = $FinalParcelNumber;
      $this->SubConsignmentWeight = $SubConsignmentWeight;
      $this->CustomerReference = $CustomerReference;
      $this->AlternativeReference = $AlternativeReference;
      $this->SpecialInstructions1 = $SpecialInstructions1;
      $this->SpecialInstructions2 = $SpecialInstructions2;
      $this->ContactName = $ContactName;
      $this->TelephoneNumber = $TelephoneNumber;
      $this->EmailAddress = $EmailAddress;
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
     * @return \UkMail\Test\Tracking\DomesticSubV1
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
     * @return \UkMail\Test\Tracking\DomesticSubV1
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartParcelNumber()
    {
      return $this->StartParcelNumber;
    }

    /**
     * @param int $StartParcelNumber
     * @return \UkMail\Test\Tracking\DomesticSubV1
     */
    public function setStartParcelNumber($StartParcelNumber)
    {
      $this->StartParcelNumber = $StartParcelNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getFinalParcelNumber()
    {
      return $this->FinalParcelNumber;
    }

    /**
     * @param int $FinalParcelNumber
     * @return \UkMail\Test\Tracking\DomesticSubV1
     */
    public function setFinalParcelNumber($FinalParcelNumber)
    {
      $this->FinalParcelNumber = $FinalParcelNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubConsignmentWeight()
    {
      return $this->SubConsignmentWeight;
    }

    /**
     * @param int $SubConsignmentWeight
     * @return \UkMail\Test\Tracking\DomesticSubV1
     */
    public function setSubConsignmentWeight($SubConsignmentWeight)
    {
      $this->SubConsignmentWeight = $SubConsignmentWeight;
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
     * @return \UkMail\Test\Tracking\DomesticSubV1
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
     * @return \UkMail\Test\Tracking\DomesticSubV1
     */
    public function setAlternativeReference($AlternativeReference)
    {
      $this->AlternativeReference = $AlternativeReference;
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
     * @return \UkMail\Test\Tracking\DomesticSubV1
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
     * @return \UkMail\Test\Tracking\DomesticSubV1
     */
    public function setSpecialInstructions2($SpecialInstructions2)
    {
      $this->SpecialInstructions2 = $SpecialInstructions2;
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
     * @return \UkMail\Test\Tracking\DomesticSubV1
     */
    public function setContactName($ContactName)
    {
      $this->ContactName = $ContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelephoneNumber()
    {
      return $this->TelephoneNumber;
    }

    /**
     * @param string $TelephoneNumber
     * @return \UkMail\Test\Tracking\DomesticSubV1
     */
    public function setTelephoneNumber($TelephoneNumber)
    {
      $this->TelephoneNumber = $TelephoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return \UkMail\Test\Tracking\DomesticSubV1
     */
    public function setEmailAddress($EmailAddress)
    {
      $this->EmailAddress = $EmailAddress;
      return $this;
    }

}
