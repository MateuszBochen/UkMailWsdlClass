<?php

namespace UkMail\Prod\DespatchingDomesticConsignments;

class AddReturnToSenderResponse
{

    /**
     * @var UKMAddReturnToSenderWebResponse $AddReturnToSenderResult
     */
    protected $AddReturnToSenderResult = null;

    /**
     * @param UKMAddReturnToSenderWebResponse $AddReturnToSenderResult
     */
    public function __construct($AddReturnToSenderResult = null)
    {
      $this->AddReturnToSenderResult = $AddReturnToSenderResult;
    }

    /**
     * @return UKMAddReturnToSenderWebResponse
     */
    public function getAddReturnToSenderResult()
    {
      return $this->AddReturnToSenderResult;
    }

    /**
     * @param UKMAddReturnToSenderWebResponse $AddReturnToSenderResult
     * @return \UkMail\Prod\DespatchingDomesticConsignments\AddReturnToSenderResponse
     */
    public function setAddReturnToSenderResult($AddReturnToSenderResult)
    {
      $this->AddReturnToSenderResult = $AddReturnToSenderResult;
      return $this;
    }

}
