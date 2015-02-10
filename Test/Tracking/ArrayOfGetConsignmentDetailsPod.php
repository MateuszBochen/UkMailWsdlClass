<?php

namespace UkMail\Test\Tracking;

class ArrayOfGetConsignmentDetailsPod
{

    /**
     * @var GetConsignmentDetailsPod[] $GetConsignmentDetailsPod
     */
    protected $GetConsignmentDetailsPod = null;

    /**
     * @param GetConsignmentDetailsPod[] $GetConsignmentDetailsPod
     */
    public function __construct(array $GetConsignmentDetailsPod = null)
    {
      $this->GetConsignmentDetailsPod = $GetConsignmentDetailsPod;
    }

    /**
     * @return GetConsignmentDetailsPod[]
     */
    public function getGetConsignmentDetailsPod()
    {
      return $this->GetConsignmentDetailsPod;
    }

    /**
     * @param GetConsignmentDetailsPod[] $GetConsignmentDetailsPod
     * @return \UkMail\Test\Tracking\ArrayOfGetConsignmentDetailsPod
     */
    public function setGetConsignmentDetailsPod(array $GetConsignmentDetailsPod)
    {
      $this->GetConsignmentDetailsPod = $GetConsignmentDetailsPod;
      return $this;
    }

}
