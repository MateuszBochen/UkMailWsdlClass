<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

class AddReturnToSender
{

    /**
     * @var AddReturnWebRequest $request
     */
    protected $request = null;

    /**
     * @param AddReturnWebRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return AddReturnWebRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param AddReturnWebRequest $request
     * @return \UkMail\Test\DespatchingDomesticConsignments\AddReturnToSender
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
