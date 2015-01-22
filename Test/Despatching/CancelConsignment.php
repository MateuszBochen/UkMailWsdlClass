<?php

namespace UkMail\Test\Despatching;

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
     * @return \UkMail\Test\Despatching\CancelConsignment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
