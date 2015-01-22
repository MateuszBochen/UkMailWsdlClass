<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

class CancelConsignmentResponse
{

    /**
     * @var UKMCancelConsignmentWebResponse $CancelConsignmentResult
     */
    protected $CancelConsignmentResult = null;

    /**
     * @param UKMCancelConsignmentWebResponse $CancelConsignmentResult
     */
    public function __construct($CancelConsignmentResult = null)
    {
      $this->CancelConsignmentResult = $CancelConsignmentResult;
    }

    /**
     * @return UKMCancelConsignmentWebResponse
     */
    public function getCancelConsignmentResult()
    {
      return $this->CancelConsignmentResult;
    }

    /**
     * @param UKMCancelConsignmentWebResponse $CancelConsignmentResult
     * @return \UkMail\Test\DespatchingDomesticConsignments\CancelConsignmentResponse
     */
    public function setCancelConsignmentResult($CancelConsignmentResult)
    {
      $this->CancelConsignmentResult = $CancelConsignmentResult;
      return $this;
    }

}