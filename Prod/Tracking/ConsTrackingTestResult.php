<?php

namespace UkMail\Prod\Tracking;

class ConsTrackingTestResult
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
     * @var string $TestWebserviceResult
     */
    protected $TestWebserviceResult = null;

    /**
     * @param ResultState $ResultState
     * @param ArrayOfError $Errors
     * @param string $TestWebserviceResult
     */
    public function __construct($ResultState = null, $Errors = null, $TestWebserviceResult = null)
    {
      $this->ResultState = $ResultState;
      $this->Errors = $Errors;
      $this->TestWebserviceResult = $TestWebserviceResult;
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
     * @return \UkMail\Prod\Tracking\ConsTrackingTestResult
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
     * @return \UkMail\Prod\Tracking\ConsTrackingTestResult
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return string
     */
    public function getTestWebserviceResult()
    {
      return $this->TestWebserviceResult;
    }

    /**
     * @param string $TestWebserviceResult
     * @return \UkMail\Prod\Tracking\ConsTrackingTestResult
     */
    public function setTestWebserviceResult($TestWebserviceResult)
    {
      $this->TestWebserviceResult = $TestWebserviceResult;
      return $this;
    }

}
