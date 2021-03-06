<?php

namespace UkMail\Test\Despatching;

class AddPacketConsignment
{

    /**
     * @var AddPacketConsignmentWebRequest $request
     */
    protected $request = null;

    /**
     * @param AddPacketConsignmentWebRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return AddPacketConsignmentWebRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param AddPacketConsignmentWebRequest $request
     * @return \UkMail\Test\Despatching\AddPacketConsignment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
