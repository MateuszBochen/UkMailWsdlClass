<?php

namespace UkMail\Test\Tracking;

class ArrayOfGetConsignmentStatus
{

    /**
     * @var GetConsignmentStatus[] $GetConsignmentStatus
     */
    protected $GetConsignmentStatus = null;

    /**
     * @param GetConsignmentStatus[] $GetConsignmentStatus
     */
    public function __construct(array $GetConsignmentStatus = null)
    {
      $this->GetConsignmentStatus = $GetConsignmentStatus;
    }

    /**
     * @return GetConsignmentStatus[]
     */
    public function getGetConsignmentStatus()
    {
      return $this->GetConsignmentStatus;
    }

    /**
     * @param GetConsignmentStatus[] $GetConsignmentStatus
     * @return \UkMail\Test\Tracking\ArrayOfGetConsignmentStatus
     */
    public function setGetConsignmentStatus(array $GetConsignmentStatus)
    {
      $this->GetConsignmentStatus = $GetConsignmentStatus;
      return $this;
    }

}
