<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

class AddInternationalConsignment
{

    /**
     * @var AddInternationalConsignmentWebRequest $request
     */
    protected $request = null;

    /**
     * @param AddInternationalConsignmentWebRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return AddInternationalConsignmentWebRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param AddInternationalConsignmentWebRequest $request
     * @return \UkMail\Test\DespatchingDomesticConsignments\AddInternationalConsignment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
