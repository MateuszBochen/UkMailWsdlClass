<?php

namespace UkMail\Test\Despatching;

class UKMWebResponse
{

    /**
     * @var ArrayOfUKMWebError $Errors
     */
    protected $Errors = null;

    /**
     * @var UKMResultState $Result
     */
    protected $Result = null;

    /**
     * @var ArrayOfUKMWebWarning $Warnings
     */
    protected $Warnings = null;

    /**
     * @param UKMResultState $Result
     */
    public function __construct($Result = null)
    {
      $this->Result = $Result;
    }

    /**
     * @return ArrayOfUKMWebError
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param ArrayOfUKMWebError $Errors
     * @return \UkMail\Test\Despatching\UKMWebResponse
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return UKMResultState
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param UKMResultState $Result
     * @return \UkMail\Test\Despatching\UKMWebResponse
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

    /**
     * @return ArrayOfUKMWebWarning
     */
    public function getWarnings()
    {
      return $this->Warnings;
    }

    /**
     * @param ArrayOfUKMWebWarning $Warnings
     * @return \UkMail\Test\Despatching\UKMWebResponse
     */
    public function setWarnings($Warnings)
    {
      $this->Warnings = $Warnings;
      return $this;
    }

}
