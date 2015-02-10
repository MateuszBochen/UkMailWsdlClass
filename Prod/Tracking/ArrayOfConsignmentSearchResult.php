<?php

namespace UkMail\Prod\Tracking;

class ArrayOfConsignmentSearchResult
{

    /**
     * @var ConsignmentSearchResult[] $ConsignmentSearchResult
     */
    protected $ConsignmentSearchResult = null;

    /**
     * @param ConsignmentSearchResult[] $ConsignmentSearchResult
     */
    public function __construct(array $ConsignmentSearchResult = null)
    {
      $this->ConsignmentSearchResult = $ConsignmentSearchResult;
    }

    /**
     * @return ConsignmentSearchResult[]
     */
    public function getConsignmentSearchResult()
    {
      return $this->ConsignmentSearchResult;
    }

    /**
     * @param ConsignmentSearchResult[] $ConsignmentSearchResult
     * @return \UkMail\Prod\Tracking\ArrayOfConsignmentSearchResult
     */
    public function setConsignmentSearchResult(array $ConsignmentSearchResult)
    {
      $this->ConsignmentSearchResult = $ConsignmentSearchResult;
      return $this;
    }

}
