<?php

namespace UkMail\Test\Despatching;

class AddDomesticConsignmentResponse
{

    /**
     * @var UKMAddDomesticConsignmentWebResponse $AddDomesticConsignmentResult
     */
    protected $AddDomesticConsignmentResult = null;

    /**
     * @param UKMAddDomesticConsignmentWebResponse $AddDomesticConsignmentResult
     */
    public function __construct($AddDomesticConsignmentResult = null)
    {
      $this->AddDomesticConsignmentResult = $AddDomesticConsignmentResult;
    }

    /**
     * @return UKMAddDomesticConsignmentWebResponse
     */
    public function getAddDomesticConsignmentResult()
    {
      return $this->AddDomesticConsignmentResult;
    }

    /**
     * @param UKMAddDomesticConsignmentWebResponse $AddDomesticConsignmentResult
     * @return \UkMail\Test\Despatching\AddDomesticConsignmentResponse
     */
    public function setAddDomesticConsignmentResult($AddDomesticConsignmentResult)
    {
      $this->AddDomesticConsignmentResult = $AddDomesticConsignmentResult;
      return $this;
    }

}
