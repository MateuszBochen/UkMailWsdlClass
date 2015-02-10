<?php

namespace UkMail\Prod\Tracking;

class ConsignmentTrackingSearchResult
{

    /**
     * @var ResultState $ResultState
     */
    protected $ResultState = null;

    /**
     * @var ArrayOfConsignmentSearchResult $ConsignmentResults
     */
    protected $ConsignmentResults = null;

    /**
     * @var ArrayOfError $Errors
     */
    protected $Errors = null;

    /**
     * @param ResultState $ResultState
     * @param ArrayOfConsignmentSearchResult $ConsignmentResults
     * @param ArrayOfError $Errors
     */
    public function __construct($ResultState = null, $ConsignmentResults = null, $Errors = null)
    {
      $this->ResultState = $ResultState;
      $this->ConsignmentResults = $ConsignmentResults;
      $this->Errors = $Errors;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingSearchResult
     */
    public function setResultState($ResultState)
    {
      $this->ResultState = $ResultState;
      return $this;
    }

    /**
     * @return ArrayOfConsignmentSearchResult
     */
    public function getConsignmentResults()
    {
      return $this->ConsignmentResults;
    }

    /**
     * @param ArrayOfConsignmentSearchResult $ConsignmentResults
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingSearchResult
     */
    public function setConsignmentResults($ConsignmentResults)
    {
      $this->ConsignmentResults = $ConsignmentResults;
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
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingSearchResult
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

}
