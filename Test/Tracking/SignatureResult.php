<?php

namespace UkMail\Test\Tracking;

class SignatureResult
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
     * @var ArrayOfSignatureDetails $SignatureDetails
     */
    protected $SignatureDetails = null;

    /**
     * @param ResultState $ResultState
     * @param ArrayOfError $Errors
     * @param ArrayOfSignatureDetails $SignatureDetails
     */
    public function __construct($ResultState = null, $Errors = null, $SignatureDetails = null)
    {
      $this->ResultState = $ResultState;
      $this->Errors = $Errors;
      $this->SignatureDetails = $SignatureDetails;
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
     * @return \UkMail\Test\Tracking\SignatureResult
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
     * @return \UkMail\Test\Tracking\SignatureResult
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return ArrayOfSignatureDetails
     */
    public function getSignatureDetails()
    {
      return $this->SignatureDetails;
    }

    /**
     * @param ArrayOfSignatureDetails $SignatureDetails
     * @return \UkMail\Test\Tracking\SignatureResult
     */
    public function setSignatureDetails($SignatureDetails)
    {
      $this->SignatureDetails = $SignatureDetails;
      return $this;
    }

}
