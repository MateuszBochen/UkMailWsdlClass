<?php

namespace UkMail\Prod\Tracking;

class BoxV1
{

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    /**
     * @var int $ParcelNumber
     */
    protected $ParcelNumber = null;

    /**
     * @var char $Action
     */
    protected $Action = null;

    /**
     * @var string $ParcelDescription
     */
    protected $ParcelDescription = null;

    /**
     * @var string $ParcelReference
     */
    protected $ParcelReference = null;

    /**
     * @var boolean $ParcelReconciled
     */
    protected $ParcelReconciled = null;

    /**
     * @param string $ConsignmentNumber
     * @param int $ParcelNumber
     * @param char $Action
     * @param string $ParcelDescription
     * @param string $ParcelReference
     * @param boolean $ParcelReconciled
     */
    public function __construct($ConsignmentNumber = null, $ParcelNumber = null, $Action = null, $ParcelDescription = null, $ParcelReference = null, $ParcelReconciled = null)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->ParcelNumber = $ParcelNumber;
      $this->Action = $Action;
      $this->ParcelDescription = $ParcelDescription;
      $this->ParcelReference = $ParcelReference;
      $this->ParcelReconciled = $ParcelReconciled;
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
     * @return \UkMail\Prod\Tracking\BoxV1
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getParcelNumber()
    {
      return $this->ParcelNumber;
    }

    /**
     * @param int $ParcelNumber
     * @return \UkMail\Prod\Tracking\BoxV1
     */
    public function setParcelNumber($ParcelNumber)
    {
      $this->ParcelNumber = $ParcelNumber;
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
     * @return \UkMail\Prod\Tracking\BoxV1
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getParcelDescription()
    {
      return $this->ParcelDescription;
    }

    /**
     * @param string $ParcelDescription
     * @return \UkMail\Prod\Tracking\BoxV1
     */
    public function setParcelDescription($ParcelDescription)
    {
      $this->ParcelDescription = $ParcelDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getParcelReference()
    {
      return $this->ParcelReference;
    }

    /**
     * @param string $ParcelReference
     * @return \UkMail\Prod\Tracking\BoxV1
     */
    public function setParcelReference($ParcelReference)
    {
      $this->ParcelReference = $ParcelReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getParcelReconciled()
    {
      return $this->ParcelReconciled;
    }

    /**
     * @param boolean $ParcelReconciled
     * @return \UkMail\Prod\Tracking\BoxV1
     */
    public function setParcelReconciled($ParcelReconciled)
    {
      $this->ParcelReconciled = $ParcelReconciled;
      return $this;
    }

}
