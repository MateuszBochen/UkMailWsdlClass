<?php

namespace UkMail\Prod\Tracking;

class ArrayOfGetFullConsignmentDetailsPod
{

    /**
     * @var GetFullConsignmentDetailsPod[] $GetFullConsignmentDetailsPod
     */
    protected $GetFullConsignmentDetailsPod = null;

    /**
     * @param GetFullConsignmentDetailsPod[] $GetFullConsignmentDetailsPod
     */
    public function __construct(array $GetFullConsignmentDetailsPod = null)
    {
      $this->GetFullConsignmentDetailsPod = $GetFullConsignmentDetailsPod;
    }

    /**
     * @return GetFullConsignmentDetailsPod[]
     */
    public function getGetFullConsignmentDetailsPod()
    {
      return $this->GetFullConsignmentDetailsPod;
    }

    /**
     * @param GetFullConsignmentDetailsPod[] $GetFullConsignmentDetailsPod
     * @return \UkMail\Prod\Tracking\ArrayOfGetFullConsignmentDetailsPod
     */
    public function setGetFullConsignmentDetailsPod(array $GetFullConsignmentDetailsPod)
    {
      $this->GetFullConsignmentDetailsPod = $GetFullConsignmentDetailsPod;
      return $this;
    }

}
