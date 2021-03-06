<?php

namespace UkMail\Prod\Despatching;

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
     * @return \UkMail\Prod\Despatching\AddReturnToSenderResponse
     */
    public function setAddReturnToSenderResult($AddReturnToSenderResult)
    {
      $this->AddReturnToSenderResult = $AddReturnToSenderResult;
      return $this;
    }

}
