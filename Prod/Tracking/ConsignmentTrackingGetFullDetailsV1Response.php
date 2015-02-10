<?php

namespace UkMail\Prod\Tracking;

class ConsignmentTrackingGetFullDetailsV1Response
{

    /**
     * @var ConsignmentTrackingGetFullDetailsResult $ConsignmentTrackingGetFullDetailsV1Result
     */
    protected $ConsignmentTrackingGetFullDetailsV1Result = null;

    /**
     * @param ConsignmentTrackingGetFullDetailsResult $ConsignmentTrackingGetFullDetailsV1Result
     */
    public function __construct($ConsignmentTrackingGetFullDetailsV1Result = null)
    {
      $this->ConsignmentTrackingGetFullDetailsV1Result = $ConsignmentTrackingGetFullDetailsV1Result;
    }

    /**
     * @return ConsignmentTrackingGetFullDetailsResult
     */
    public function getConsignmentTrackingGetFullDetailsV1Result()
    {
      return $this->ConsignmentTrackingGetFullDetailsV1Result;
    }

    /**
     * @param ConsignmentTrackingGetFullDetailsResult $ConsignmentTrackingGetFullDetailsV1Result
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetFullDetailsV1Response
     */
    public function setConsignmentTrackingGetFullDetailsV1Result($ConsignmentTrackingGetFullDetailsV1Result)
    {
      $this->ConsignmentTrackingGetFullDetailsV1Result = $ConsignmentTrackingGetFullDetailsV1Result;
      return $this;
    }

}
