<?php

namespace UkMail\Prod\Despatching;

class AddSendToThirdPartyResponse
{

    /**
     * @var UKMAddSendToThirdPartyWebResponse $AddSendToThirdPartyResult
     */
    protected $AddSendToThirdPartyResult = null;

    /**
     * @param UKMAddSendToThirdPartyWebResponse $AddSendToThirdPartyResult
     */
    public function __construct($AddSendToThirdPartyResult = null)
    {
      $this->AddSendToThirdPartyResult = $AddSendToThirdPartyResult;
    }

    /**
     * @return UKMAddSendToThirdPartyWebResponse
     */
    public function getAddSendToThirdPartyResult()
    {
      return $this->AddSendToThirdPartyResult;
    }

    /**
     * @param UKMAddSendToThirdPartyWebResponse $AddSendToThirdPartyResult
     * @return \UkMail\Prod\Despatching\AddSendToThirdPartyResponse
     */
    public function setAddSendToThirdPartyResult($AddSendToThirdPartyResult)
    {
      $this->AddSendToThirdPartyResult = $AddSendToThirdPartyResult;
      return $this;
    }

}
