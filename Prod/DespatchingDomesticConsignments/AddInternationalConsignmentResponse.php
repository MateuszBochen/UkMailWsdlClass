<?php

namespace UkMail\Prod\DespatchingDomesticConsignments;

class AddInternationalConsignmentResponse
{

    /**
     * @var UKMAddInternationalConsignmentWebResponse $AddInternationalConsignmentResult
     */
    protected $AddInternationalConsignmentResult = null;

    /**
     * @param UKMAddInternationalConsignmentWebResponse $AddInternationalConsignmentResult
     */
    public function __construct($AddInternationalConsignmentResult = null)
    {
      $this->AddInternationalConsignmentResult = $AddInternationalConsignmentResult;
    }

    /**
     * @return UKMAddInternationalConsignmentWebResponse
     */
    public function getAddInternationalConsignmentResult()
    {
      return $this->AddInternationalConsignmentResult;
    }

    /**
     * @param UKMAddInternationalConsignmentWebResponse $AddInternationalConsignmentResult
     * @return \UkMail\Prod\DespatchingDomesticConsignments\AddInternationalConsignmentResponse
     */
    public function setAddInternationalConsignmentResult($AddInternationalConsignmentResult)
    {
      $this->AddInternationalConsignmentResult = $AddInternationalConsignmentResult;
      return $this;
    }

}
