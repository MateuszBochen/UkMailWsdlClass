<?php

namespace UkMail\Test\Tracking;

class ConsignmentTrackingGetFullDetailsV2Response
{

    /**
     * @var ConsignmentTrackingGetFullDetailsResultV2 $ConsignmentTrackingGetFullDetailsV2Result
     */
    protected $ConsignmentTrackingGetFullDetailsV2Result = null;

    /**
     * @param ConsignmentTrackingGetFullDetailsResultV2 $ConsignmentTrackingGetFullDetailsV2Result
     */
    public function __construct($ConsignmentTrackingGetFullDetailsV2Result = null)
    {
      $this->ConsignmentTrackingGetFullDetailsV2Result = $ConsignmentTrackingGetFullDetailsV2Result;
    }

    /**
     * @return ConsignmentTrackingGetFullDetailsResultV2
     */
    public function getConsignmentTrackingGetFullDetailsV2Result()
    {
      return $this->ConsignmentTrackingGetFullDetailsV2Result;
    }

    /**
     * @param ConsignmentTrackingGetFullDetailsResultV2 $ConsignmentTrackingGetFullDetailsV2Result
     * @return \UkMail\Test\Tracking\ConsignmentTrackingGetFullDetailsV2Response
     */
    public function setConsignmentTrackingGetFullDetailsV2Result($ConsignmentTrackingGetFullDetailsV2Result)
    {
      $this->ConsignmentTrackingGetFullDetailsV2Result = $ConsignmentTrackingGetFullDetailsV2Result;
      return $this;
    }

}
