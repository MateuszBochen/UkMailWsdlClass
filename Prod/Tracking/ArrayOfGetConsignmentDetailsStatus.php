<?php

namespace UkMail\Prod\Tracking;

class ArrayOfGetConsignmentDetailsStatus
{

    /**
     * @var GetConsignmentDetailsStatus[] $GetConsignmentDetailsStatus
     */
    protected $GetConsignmentDetailsStatus = null;

    /**
     * @param GetConsignmentDetailsStatus[] $GetConsignmentDetailsStatus
     */
    public function __construct(array $GetConsignmentDetailsStatus = null)
    {
      $this->GetConsignmentDetailsStatus = $GetConsignmentDetailsStatus;
    }

    /**
     * @return GetConsignmentDetailsStatus[]
     */
    public function getGetConsignmentDetailsStatus()
    {
      return $this->GetConsignmentDetailsStatus;
    }

    /**
     * @param GetConsignmentDetailsStatus[] $GetConsignmentDetailsStatus
     * @return \UkMail\Prod\Tracking\ArrayOfGetConsignmentDetailsStatus
     */
    public function setGetConsignmentDetailsStatus(array $GetConsignmentDetailsStatus)
    {
      $this->GetConsignmentDetailsStatus = $GetConsignmentDetailsStatus;
      return $this;
    }

}
