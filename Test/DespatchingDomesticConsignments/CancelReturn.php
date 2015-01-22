<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

class CancelReturn
{

    /**
     * @var CancelReturnWebRequest $request
     */
    protected $request = null;

    /**
     * @param CancelReturnWebRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return CancelReturnWebRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CancelReturnWebRequest $request
     * @return \UkMail\Test\DespatchingDomesticConsignments\CancelReturn
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
