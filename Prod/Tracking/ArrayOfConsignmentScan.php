<?php

namespace UkMail\Prod\Tracking;

class ArrayOfConsignmentScan
{

    /**
     * @var ConsignmentScan[] $ConsignmentScan
     */
    protected $ConsignmentScan = null;

    /**
     * @param ConsignmentScan[] $ConsignmentScan
     */
    public function __construct(array $ConsignmentScan = null)
    {
      $this->ConsignmentScan = $ConsignmentScan;
    }

    /**
     * @return ConsignmentScan[]
     */
    public function getConsignmentScan()
    {
      return $this->ConsignmentScan;
    }

    /**
     * @param ConsignmentScan[] $ConsignmentScan
     * @return \UkMail\Prod\Tracking\ArrayOfConsignmentScan
     */
    public function setConsignmentScan(array $ConsignmentScan)
    {
      $this->ConsignmentScan = $ConsignmentScan;
      return $this;
    }

}
