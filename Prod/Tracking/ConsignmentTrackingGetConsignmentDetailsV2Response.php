<?php

namespace UkMail\Prod\Tracking;

class ConsignmentTrackingGetConsignmentDetailsV2Response
{

    /**
     * @var ConsignmentTrackingGetDetailsResultV2 $ConsignmentTrackingGetConsignmentDetailsV2Result
     */
    protected $ConsignmentTrackingGetConsignmentDetailsV2Result = null;

    /**
     * @param ConsignmentTrackingGetDetailsResultV2 $ConsignmentTrackingGetConsignmentDetailsV2Result
     */
    public function __construct($ConsignmentTrackingGetConsignmentDetailsV2Result = null)
    {
      $this->ConsignmentTrackingGetConsignmentDetailsV2Result = $ConsignmentTrackingGetConsignmentDetailsV2Result;
    }

    /**
     * @return ConsignmentTrackingGetDetailsResultV2
     */
    public function getConsignmentTrackingGetConsignmentDetailsV2Result()
    {
      return $this->ConsignmentTrackingGetConsignmentDetailsV2Result;
    }

    /**
     * @param ConsignmentTrackingGetDetailsResultV2 $ConsignmentTrackingGetConsignmentDetailsV2Result
     * @return \UkMail\Prod\Tracking\ConsignmentTrackingGetConsignmentDetailsV2Response
     */
    public function setConsignmentTrackingGetConsignmentDetailsV2Result($ConsignmentTrackingGetConsignmentDetailsV2Result)
    {
      $this->ConsignmentTrackingGetConsignmentDetailsV2Result = $ConsignmentTrackingGetConsignmentDetailsV2Result;
      return $this;
    }

}
