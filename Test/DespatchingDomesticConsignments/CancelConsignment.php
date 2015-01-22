<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

class CancelConsignment
{

    /**
     * @var CancelConsignmentWebRequest $request
     */
    protected $request = null;

    /**
     * @param CancelConsignmentWebRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return CancelConsignmentWebRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CancelConsignmentWebRequest $request
     * @return \UkMail\Test\DespatchingDomesticConsignments\CancelConsignment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
