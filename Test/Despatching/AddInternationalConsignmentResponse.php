<?php

namespace UkMail\Test\Despatching;

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
     * @return \UkMail\Test\Despatching\AddInternationalConsignmentResponse
     */
    public function setAddInternationalConsignmentResult($AddInternationalConsignmentResult)
    {
      $this->AddInternationalConsignmentResult = $AddInternationalConsignmentResult;
      return $this;
    }

}
