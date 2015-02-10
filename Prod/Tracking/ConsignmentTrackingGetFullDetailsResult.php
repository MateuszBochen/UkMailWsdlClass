<?php

namespace UkMail\Prod\Tracking;

class ConsignmentTrackingGetFullDetailsResult
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
     * @var ConsignmentTrackingGetFullDetails $FullConsignmentDetails
     */
    protected $FullConsignmentDetails = null;

    /**
     * @param ResultState $ResultState
     * @param ArrayOfError $Errors
     * @param ConsignmentTrackingGetFullDetails $FullConsignmentDetails
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetailsResult
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetailsResult
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return ConsignmentTrackingGetFullDetails
     */
    public function getFullConsignmentDetails()
    {
      return $this->FullConsignmentDetails;
    }

    /**
     * @param ConsignmentTrackingGetFullDetails $FullConsignmentDetails
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetailsResult
     */
    public function setFullConsignmentDetails($FullConsignmentDetails)
    {
      $this->FullConsignmentDetails = $FullConsignmentDetails;
      return $this;
    }

}
