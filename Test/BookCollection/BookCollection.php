<?php

namespace UkMail\Test\BookCollection;

class BookCollection
{

    /**
     * @var AddCollectionWebRequest $request
     */
    protected $request = null;

    /**
     * @param AddCollectionWebRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return AddCollectionWebRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param AddCollectionWebRequest $request
     * @return \UkMail\Test\BookCollection\BookCollection
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
