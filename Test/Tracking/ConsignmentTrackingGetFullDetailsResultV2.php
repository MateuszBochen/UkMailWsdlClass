<?php

namespace UkMail\Test\Tracking;

class ConsignmentTrackingGetFullDetailsResultV2
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
     * @var ConsignmentTrackingGetFullDetailsV2 $FullConsignmentDetails
     */
    protected $FullConsignmentDetails = null;

    /**
     * @param ResultState $ResultState
     * @param ArrayOfError $Errors
     * @param ConsignmentTrackingGetFullDetailsV2 $FullConsignmentDetails
     */
    public function __construct($ResultState = null, $Errors = null, $FullConsignmentDetails = null)
    {
      $this->ResultState = $ResultState;
      $this->Errors = $Errors;
      $this->FullConsignmentDetails = $FullConsignmentDetails;
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
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetFullDetailsResultV2
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
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetFullDetailsResultV2
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return ConsignmentTrackingGetFullDetailsV2
     */
    public function getFullConsignmentDetails()
    {
      return $this->FullConsignmentDetails;
    }

    /**
     * @param ConsignmentTrackingGetFullDetailsV2 $FullConsignmentDetails
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetFullDetailsResultV2
     */
    public function setFullConsignmentDetails($FullConsignmentDetails)
    {
      $this->FullConsignmentDetails = $FullConsignmentDetails;
      return $this;
    }

}
