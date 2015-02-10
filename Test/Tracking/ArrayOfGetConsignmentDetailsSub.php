<?php

namespace UkMail\Test\Tracking;

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
     * @return \UkMail\Test\Tracking\ArrayOfGetConsignmentDetailsSub
     */
    public function setGetConsignmentDetailsSub(array $GetConsignmentDetailsSub)
    {
      $this->GetConsignmentDetailsSub = $GetConsignmentDetailsSub;
      return $this;
    }

}
