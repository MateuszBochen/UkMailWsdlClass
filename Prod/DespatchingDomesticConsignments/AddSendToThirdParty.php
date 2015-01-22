<?php

namespace UkMail\Prod\DespatchingDomesticConsignments;

class AddSendToThirdParty
{

    /**
     * @var AddSendToThirdPartyWebRequest $request
     */
    protected $request = null;

    /**
     * @param AddSendToThirdPartyWebRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return AddSendToThirdPartyWebRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param AddSendToThirdPartyWebRequest $request
     * @return \UkMail\Prod\DespatchingDomesticConsignments\AddSendToThirdParty
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}