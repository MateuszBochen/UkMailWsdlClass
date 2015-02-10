<?php

namespace UkMail\Test\Tracking;

class ConsignmentTrackingGetFullDetailsV3Response
{

    /**
     * @var ConsignmentTrackingGetFullDetailsResultV3 $ConsignmentTrackingGetFullDetailsV3Result
     */
    protected $ConsignmentTrackingGetFullDetailsV3Result = null;

    /**
     * @param ConsignmentTrackingGetFullDetailsResultV3 $ConsignmentTrackingGetFullDetailsV3Result
     */
    public function __construct($ConsignmentTrackingGetFullDetailsV3Result = null)
    {
      $this->ConsignmentTrackingGetFullDetailsV3Result = $ConsignmentTrackingGetFullDetailsV3Result;
    }

    /**
     * @return ConsignmentTrackingGetFullDetailsResultV3
     */
    public function getConsignmentTrackingGetFullDetailsV3Result()
    {
      return $this->ConsignmentTrackingGetFullDetailsV3Result;
    }

    /**
     * @param ConsignmentTrackingGetFullDetailsResultV3 $ConsignmentTrackingGetFullDetailsV3Result
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetFullDetailsV3Response
     */
    public function setConsignmentTrackingGetFullDetailsV3Result($ConsignmentTrackingGetFullDetailsV3Result)
    {
      $this->ConsignmentTrackingGetFullDetailsV3Result = $ConsignmentTrackingGetFullDetailsV3Result;
      return $this;
    }

}
