<?php

namespace UkMail\Test\Tracking;

class ConsignmentTrackingGetConsignmentDetailsV1Response
{

    /**
     * @var ConsignmentTrackingGetDetailsResult $ConsignmentTrackingGetConsignmentDetailsV1Result
     */
    protected $ConsignmentTrackingGetConsignmentDetailsV1Result = null;

    /**
     * @param ConsignmentTrackingGetDetailsResult $ConsignmentTrackingGetConsignmentDetailsV1Result
     */
    public function __construct($ConsignmentTrackingGetConsignmentDetailsV1Result = null)
    {
      $this->ConsignmentTrackingGetConsignmentDetailsV1Result = $ConsignmentTrackingGetConsignmentDetailsV1Result;
    }

    /**
     * @return ConsignmentTrackingGetDetailsResult
     */
    public function getConsignmentTrackingGetConsignmentDetailsV1Result()
    {
      return $this->ConsignmentTrackingGetConsignmentDetailsV1Result;
    }

    /**
     * @param ConsignmentTrackingGetDetailsResult $ConsignmentTrackingGetConsignmentDetailsV1Result
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetConsignmentDetailsV1Response
     */
    public function setConsignmentTrackingGetConsignmentDetailsV1Result($ConsignmentTrackingGetConsignmentDetailsV1Result)
    {
      $this->ConsignmentTrackingGetConsignmentDetailsV1Result = $ConsignmentTrackingGetConsignmentDetailsV1Result;
      return $this;
    }

}
