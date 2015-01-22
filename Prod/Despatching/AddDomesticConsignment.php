<?php

namespace UkMail\Prod\Despatching;

class AddDomesticConsignment
{

    /**
     * @var AddDomesticConsignmentWebRequest $request
     */
    protected $request = null;

    /**
     * @param AddDomesticConsignmentWebRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return AddDomesticConsignmentWebRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param AddDomesticConsignmentWebRequest $request
     * @return \UkMail\Prod\Despatching\AddDomesticConsignment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
