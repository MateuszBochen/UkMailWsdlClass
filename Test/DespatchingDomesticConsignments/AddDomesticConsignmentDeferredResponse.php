<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

class AddDomesticConsignmentDeferredResponse
{

    /**
     * @var UKMAddDomesticConsignmentWebResponse $AddDomesticConsignmentDeferredResult
     */
    protected $AddDomesticConsignmentDeferredResult = null;

    /**
     * @param UKMAddDomesticConsignmentWebResponse $AddDomesticConsignmentDeferredResult
     */
    public function __construct($AddDomesticConsignmentDeferredResult = null)
    {
      $this->AddDomesticConsignmentDeferredResult = $AddDomesticConsignmentDeferredResult;
    }

    /**
     * @return UKMAddDomesticConsignmentWebResponse
     */
    public function getAddDomesticConsignmentDeferredResult()
    {
      return $this->AddDomesticConsignmentDeferredResult;
    }

    /**
     * @param UKMAddDomesticConsignmentWebResponse $AddDomesticConsignmentDeferredResult
     * @return \UkMail\Test\DespatchingDomesticConsignments\AddDomesticConsignmentDeferredResponse
     */
    public function setAddDomesticConsignmentDeferredResult($AddDomesticConsignmentDeferredResult)
    {
      $this->AddDomesticConsignmentDeferredResult = $AddDomesticConsignmentDeferredResult;
      return $this;
    }

}
