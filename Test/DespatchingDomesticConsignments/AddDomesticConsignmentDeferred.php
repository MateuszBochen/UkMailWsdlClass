<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

class AddDomesticConsignmentDeferred
{

    /**
     * @var AddDomesticConsignmentDeferredWebRequest $request
     */
    protected $request = null;

    /**
     * @param AddDomesticConsignmentDeferredWebRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return AddDomesticConsignmentDeferredWebRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param AddDomesticConsignmentDeferredWebRequest $request
     * @return \UkMail\Test\DespatchingDomesticConsignments\AddDomesticConsignmentDeferred
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
