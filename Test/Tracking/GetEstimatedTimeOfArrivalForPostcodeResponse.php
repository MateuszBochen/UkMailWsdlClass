<?php

namespace UkMail\Test\Tracking;

class GetEstimatedTimeOfArrivalForPostcodeResponse
{

    /**
     * @var GetEstimatedTimeOfArrivalForPostcodeResult $GetEstimatedTimeOfArrivalForPostcodeResult
     */
    protected $GetEstimatedTimeOfArrivalForPostcodeResult = null;

    /**
     * @param GetEstimatedTimeOfArrivalForPostcodeResult $GetEstimatedTimeOfArrivalForPostcodeResult
     */
    public function __construct($GetEstimatedTimeOfArrivalForPostcodeResult = null)
    {
      $this->GetEstimatedTimeOfArrivalForPostcodeResult = $GetEstimatedTimeOfArrivalForPostcodeResult;
    }

    /**
     * @return GetEstimatedTimeOfArrivalForPostcodeResult
     */
    public function getGetEstimatedTimeOfArrivalForPostcodeResult()
    {
      return $this->GetEstimatedTimeOfArrivalForPostcodeResult;
    }

    /**
     * @param GetEstimatedTimeOfArrivalForPostcodeResult $GetEstimatedTimeOfArrivalForPostcodeResult
     * @return \UkMail\Test\Tracking\GetEstimatedTimeOfArrivalForPostcodeResponse
     */
    public function setGetEstimatedTimeOfArrivalForPostcodeResult($GetEstimatedTimeOfArrivalForPostcodeResult)
    {
      $this->GetEstimatedTimeOfArrivalForPostcodeResult = $GetEstimatedTimeOfArrivalForPostcodeResult;
      return $this;
    }

}
