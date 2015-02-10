<?php

namespace UkMail\Prod\Tracking;

class ManifestResult
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
     * @param ResultState $ResultState
     * @param ArrayOfError $Errors
     */
    public function __construct($ResultState = null, $Errors = null)
    {
      $this->ResultState = $ResultState;
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
     * @return \UkMail\Prod\Tracking\ManifestResult
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
     * @return \UkMail\Prod\Tracking\ManifestResult
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

}
