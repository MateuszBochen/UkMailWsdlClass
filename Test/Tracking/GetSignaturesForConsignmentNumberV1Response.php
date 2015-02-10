<?php

namespace UkMail\Test\Tracking;

class GetSignaturesForConsignmentNumberV1Response
{

    /**
     * @var SignatureResult $GetSignaturesForConsignmentNumberV1Result
     */
    protected $GetSignaturesForConsignmentNumberV1Result = null;

    /**
     * @param SignatureResult $GetSignaturesForConsignmentNumberV1Result
     */
    public function __construct($GetSignaturesForConsignmentNumberV1Result = null)
    {
      $this->GetSignaturesForConsignmentNumberV1Result = $GetSignaturesForConsignmentNumberV1Result;
    }

    /**
     * @return SignatureResult
     */
    public function getGetSignaturesForConsignmentNumberV1Result()
    {
      return $this->GetSignaturesForConsignmentNumberV1Result;
    }

    /**
     * @param SignatureResult $GetSignaturesForConsignmentNumberV1Result
     * @return \UkMail\Test\Tracking\GetSignaturesForConsignmentNumberV1Response
     */
    public function setGetSignaturesForConsignmentNumberV1Result($GetSignaturesForConsignmentNumberV1Result)
    {
      $this->GetSignaturesForConsignmentNumberV1Result = $GetSignaturesForConsignmentNumberV1Result;
      return $this;
    }

}
