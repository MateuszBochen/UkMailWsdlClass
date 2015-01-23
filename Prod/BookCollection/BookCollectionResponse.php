<?php

namespace UkMail\Prod\BookCollection;

class BookCollectionResponse
{

    /**
     * @var UKMAddCollectionWebResponse $BookCollectionResult
     */
    protected $BookCollectionResult = null;

    /**
     * @param UKMAddCollectionWebResponse $BookCollectionResult
     */
    public function __construct($BookCollectionResult = null)
    {
      $this->BookCollectionResult = $BookCollectionResult;
    }

    /**
     * @return UKMAddCollectionWebResponse
     */
    public function getBookCollectionResult()
    {
      return $this->BookCollectionResult;
    }

    /**
     * @param UKMAddCollectionWebResponse $BookCollectionResult
     * @return \UkMail\Prod\BookCollection\BookCollectionResponse
     */
    public function setBookCollectionResult($BookCollectionResult)
    {
      $this->BookCollectionResult = $BookCollectionResult;
      return $this;
    }

}
