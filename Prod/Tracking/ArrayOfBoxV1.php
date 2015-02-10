<?php

namespace UkMail\Prod\Tracking;

class ArrayOfBoxV1
{

    /**
     * @var BoxV1[] $BoxV1
     */
    protected $BoxV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BoxV1[]
     */
    public function getBoxV1()
    {
      return $this->BoxV1;
    }

    /**
     * @param BoxV1[] $BoxV1
     * @return \UkMail\Prod\Tracking\ArrayOfBoxV1
     */
    public function setBoxV1(array $BoxV1)
    {
      $this->BoxV1 = $BoxV1;
      return $this;
    }

}
