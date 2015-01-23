<?php

namespace UkMail\Prod\BookCollection;

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
     * @return \UkMail\Prod\BookCollection\BookCollection
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
