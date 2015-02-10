<?php

namespace UkMail\Prod\Tracking;

class ArrayOfGetConsignmentDetailsSub
{

    /**
     * @var GetConsignmentDetailsSub[] $GetConsignmentDetailsSub
     */
    protected $GetConsignmentDetailsSub = null;

    /**
     * @param GetConsignmentDetailsSub[] $GetConsignmentDetailsSub
     */
    public function __construct(array $GetConsignmentDetailsSub = null)
    {
      $this->GetConsignmentDetailsSub = $GetConsignmentDetailsSub;
    }

    /**
     * @return GetConsignmentDetailsSub[]
     */
    public function getGetConsignmentDetailsSub()
    {
      return $this->GetConsignmentDetailsSub;
    }

    /**
     * @param GetConsignmentDetailsSub[] $GetConsignmentDetailsSub
     * @return \UkMail\Prod\Tracking\ArrayOfGetConsignmentDetailsSub
     */
    public function setGetConsignmentDetailsSub(array $GetConsignmentDetailsSub)
    {
      $this->GetConsignmentDetailsSub = $GetConsignmentDetailsSub;
      return $this;
    }

}
