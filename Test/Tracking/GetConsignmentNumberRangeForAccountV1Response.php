<?php

namespace UkMail\Test\Tracking;

class GetConsignmentNumberRangeForAccountV1Response
{

    /**
     * @var ConsignmentNumberRangeResult $GetConsignmentNumberRangeForAccountV1Result
     */
    protected $GetConsignmentNumberRangeForAccountV1Result = null;

    /**
     * @param ConsignmentNumberRangeResult $GetConsignmentNumberRangeForAccountV1Result
     */
    public function __construct($GetConsignmentNumberRangeForAccountV1Result = null)
    {
      $this->GetConsignmentNumberRangeForAccountV1Result = $GetConsignmentNumberRangeForAccountV1Result;
    }

    /**
     * @return ConsignmentNumberRangeResult
     */
    public function getGetConsignmentNumberRangeForAccountV1Result()
    {
      return $this->GetConsignmentNumberRangeForAccountV1Result;
    }

    /**
     * @param ConsignmentNumberRangeResult $GetConsignmentNumberRangeForAccountV1Result
     * @return \UkMail\Test\Tracking\GetConsignmentNumberRangeForAccountV1Response
     */
    public function setGetConsignmentNumberRangeForAccountV1Result($GetConsignmentNumberRangeForAccountV1Result)
    {
      $this->GetConsignmentNumberRangeForAccountV1Result = $GetConsignmentNumberRangeForAccountV1Result;
      return $this;
    }

}
