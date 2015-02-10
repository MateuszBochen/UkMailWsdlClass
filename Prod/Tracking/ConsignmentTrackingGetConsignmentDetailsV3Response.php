<?php

namespace UkMail\Prod\Tracking;

class ConsignmentTrackingGetConsignmentDetailsV3Response
{

    /**
     * @var ConsignmentTrackingGetDetailsResultV3 $ConsignmentTrackingGetConsignmentDetailsV3Result
     */
    protected $ConsignmentTrackingGetConsignmentDetailsV3Result = null;

    /**
     * @param ConsignmentTrackingGetDetailsResultV3 $ConsignmentTrackingGetConsignmentDetailsV3Result
     */
    public function __construct($ConsignmentTrackingGetConsignmentDetailsV3Result = null)
    {
      $this->ConsignmentTrackingGetConsignmentDetailsV3Result = $ConsignmentTrackingGetConsignmentDetailsV3Result;
    }

    /**
     * @return ConsignmentTrackingGetDetailsResultV3
     */
    public function getConsignmentTrackingGetConsignmentDetailsV3Result()
    {
      return $this->ConsignmentTrackingGetConsignmentDetailsV3Result;
    }

    /**
     * @param ConsignmentTrackingGetDetailsResultV3 $ConsignmentTrackingGetConsignmentDetailsV3Result
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetConsignmentDetailsV3Response
     */
    public function setConsignmentTrackingGetConsignmentDetailsV3Result($ConsignmentTrackingGetConsignmentDetailsV3Result)
    {
      $this->ConsignmentTrackingGetConsignmentDetailsV3Result = $ConsignmentTrackingGetConsignmentDetailsV3Result;
      return $this;
    }

}
