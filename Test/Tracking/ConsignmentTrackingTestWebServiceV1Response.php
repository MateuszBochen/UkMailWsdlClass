<?php

namespace UkMail\Test\Tracking;

class ConsignmentTrackingTestWebServiceV1Response
{

    /**
     * @var ConsTrackingTestResult $ConsignmentTrackingTestWebServiceV1Result
     */
    protected $ConsignmentTrackingTestWebServiceV1Result = null;

    /**
     * @param ConsTrackingTestResult $ConsignmentTrackingTestWebServiceV1Result
     */
    public function __construct($ConsignmentTrackingTestWebServiceV1Result = null)
    {
      $this->ConsignmentTrackingTestWebServiceV1Result = $ConsignmentTrackingTestWebServiceV1Result;
    }

    /**
     * @return ConsTrackingTestResult
     */
    public function getConsignmentTrackingTestWebServiceV1Result()
    {
      return $this->ConsignmentTrackingTestWebServiceV1Result;
    }

    /**
     * @param ConsTrackingTestResult $ConsignmentTrackingTestWebServiceV1Result
     * @return \UkMail\Test\Tracking\ConsignmentTrackingTestWebServiceV1Response
     */
    public function setConsignmentTrackingTestWebServiceV1Result($ConsignmentTrackingTestWebServiceV1Result)
    {
      $this->ConsignmentTrackingTestWebServiceV1Result = $ConsignmentTrackingTestWebServiceV1Result;
      return $this;
    }

}
