<?php

namespace UkMail\Test\Tracking;

class ConsignmentTrackingSearchV1Response
{

    /**
     * @var ConsignmentTrackingSearchResult $ConsignmentTrackingSearchV1Result
     */
    protected $ConsignmentTrackingSearchV1Result = null;

    /**
     * @param ConsignmentTrackingSearchResult $ConsignmentTrackingSearchV1Result
     */
    public function __construct($ConsignmentTrackingSearchV1Result = null)
    {
      $this->ConsignmentTrackingSearchV1Result = $ConsignmentTrackingSearchV1Result;
    }

    /**
     * @return ConsignmentTrackingSearchResult
     */
    public function getConsignmentTrackingSearchV1Result()
    {
      return $this->ConsignmentTrackingSearchV1Result;
    }

    /**
     * @param ConsignmentTrackingSearchResult $ConsignmentTrackingSearchV1Result
     * @return \UkMail\Test\Tracking\ConsignmentTrackingSearchV1Response
     */
    public function setConsignmentTrackingSearchV1Result($ConsignmentTrackingSearchV1Result)
    {
      $this->ConsignmentTrackingSearchV1Result = $ConsignmentTrackingSearchV1Result;
      return $this;
    }

}
