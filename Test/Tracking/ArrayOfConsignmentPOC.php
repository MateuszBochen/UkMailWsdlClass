<?php

namespace UkMail\Test\Tracking;

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
     * @return \UkMail\Test\Tracking\ArrayOfConsignmentPOC
     */
    public function setConsignmentPOC(array $ConsignmentPOC)
    {
      $this->ConsignmentPOC = $ConsignmentPOC;
      return $this;
    }

}
