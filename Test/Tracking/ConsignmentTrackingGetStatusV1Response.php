<?php

namespace UkMail\Test\Tracking;

class ConsignmentTrackingGetStatusV1Response
{

    /**
     * @var ConsignmentTrackingGetStatusResult $ConsignmentTrackingGetStatusV1Result
     */
    protected $ConsignmentTrackingGetStatusV1Result = null;

    /**
     * @param ConsignmentTrackingGetStatusResult $ConsignmentTrackingGetStatusV1Result
     */
    public function __construct($ConsignmentTrackingGetStatusV1Result = null)
    {
      $this->ConsignmentTrackingGetStatusV1Result = $ConsignmentTrackingGetStatusV1Result;
    }

    /**
     * @return ConsignmentTrackingGetStatusResult
     */
    public function getConsignmentTrackingGetStatusV1Result()
    {
      return $this->ConsignmentTrackingGetStatusV1Result;
    }

    /**
     * @param ConsignmentTrackingGetStatusResult $ConsignmentTrackingGetStatusV1Result
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetStatusV1Response
     */
    public function setConsignmentTrackingGetStatusV1Result($ConsignmentTrackingGetStatusV1Result)
    {
      $this->ConsignmentTrackingGetStatusV1Result = $ConsignmentTrackingGetStatusV1Result;
      return $this;
    }

}
