<?php

namespace UkMail\Prod\Tracking;

class ArrayOfConsignmentPOC
{

    /**
     * @var ConsignmentPOC[] $ConsignmentPOC
     */
    protected $ConsignmentPOC = null;

    /**
     * @param ConsignmentPOC[] $ConsignmentPOC
     */
    public function __construct(array $ConsignmentPOC = null)
    {
      $this->ConsignmentPOC = $ConsignmentPOC;
    }

    /**
     * @return ConsignmentPOC[]
     */
    public function getConsignmentPOC()
    {
      return $this->ConsignmentPOC;
    }

    /**
     * @param ConsignmentPOC[] $ConsignmentPOC
     * @return \UkMail\Prod\Tracking\ArrayOfConsignmentPOC
     */
    public function setConsignmentPOC(array $ConsignmentPOC)
    {
      $this->ConsignmentPOC = $ConsignmentPOC;
      return $this;
    }

}
