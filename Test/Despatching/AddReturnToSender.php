<?php

namespace UkMail\Test\Despatching;

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
     * @return \UkMail\Test\Despatching\AddReturnToSender
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
