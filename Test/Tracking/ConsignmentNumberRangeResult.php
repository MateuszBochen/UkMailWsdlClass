<?php

namespace UkMail\Test\Tracking;

class ConsignmentNumberRangeResult
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
     * @var ConsignmentNumberRange $NumberRange
     */
    protected $NumberRange = null;

    /**
     * @param ResultState $ResultState
     * @param ArrayOfError $Errors
     * @param ConsignmentNumberRange $NumberRange
     */
    public function __construct($ResultState = null, $Errors = null, $NumberRange = null)
    {
      $this->ResultState = $ResultState;
      $this->Errors = $Errors;
      $this->NumberRange = $NumberRange;
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
     * @return \UkMail\Test\Tracking\ConsignmentNumberRangeResult
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
     * @return \UkMail\Test\Tracking\ConsignmentNumberRangeResult
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return ConsignmentNumberRange
     */
    public function getNumberRange()
    {
      return $this->NumberRange;
    }

    /**
     * @param ConsignmentNumberRange $NumberRange
     * @return \UkMail\Test\Tracking\ConsignmentNumberRangeResult
     */
    public function setNumberRange($NumberRange)
    {
      $this->NumberRange = $NumberRange;
      return $this;
    }

}
