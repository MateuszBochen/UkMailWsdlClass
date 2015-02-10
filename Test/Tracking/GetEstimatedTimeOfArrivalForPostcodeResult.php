<?php

namespace UkMail\Test\Tracking;

class GetEstimatedTimeOfArrivalForPostcodeResult
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
     * @var string $EstimatedTimeOfArrivalFrom
     */
    protected $EstimatedTimeOfArrivalFrom = null;

    /**
     * @var string $EstimatedTimeOfArrivalTo
     */
    protected $EstimatedTimeOfArrivalTo = null;

    /**
     * @param ResultState $ResultState
     * @param ArrayOfError $Errors
     * @param string $EstimatedTimeOfArrivalFrom
     * @param string $EstimatedTimeOfArrivalTo
     */
    public function __construct($ResultState = null, $Errors = null, $EstimatedTimeOfArrivalFrom = null, $EstimatedTimeOfArrivalTo = null)
    {
      $this->ResultState = $ResultState;
      $this->Errors = $Errors;
      $this->EstimatedTimeOfArrivalFrom = $EstimatedTimeOfArrivalFrom;
      $this->EstimatedTimeOfArrivalTo = $EstimatedTimeOfArrivalTo;
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
     * @return \UkMail\Test\Tracking\GetEstimatedTimeOfArrivalForPostcodeResult
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
     * @return \UkMail\Test\Tracking\GetEstimatedTimeOfArrivalForPostcodeResult
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimatedTimeOfArrivalFrom()
    {
      return $this->EstimatedTimeOfArrivalFrom;
    }

    /**
     * @param string $EstimatedTimeOfArrivalFrom
     * @return \UkMail\Test\Tracking\GetEstimatedTimeOfArrivalForPostcodeResult
     */
    public function setEstimatedTimeOfArrivalFrom($EstimatedTimeOfArrivalFrom)
    {
      $this->EstimatedTimeOfArrivalFrom = $EstimatedTimeOfArrivalFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimatedTimeOfArrivalTo()
    {
      return $this->EstimatedTimeOfArrivalTo;
    }

    /**
     * @param string $EstimatedTimeOfArrivalTo
     * @return \UkMail\Test\Tracking\GetEstimatedTimeOfArrivalForPostcodeResult
     */
    public function setEstimatedTimeOfArrivalTo($EstimatedTimeOfArrivalTo)
    {
      $this->EstimatedTimeOfArrivalTo = $EstimatedTimeOfArrivalTo;
      return $this;
    }

}
