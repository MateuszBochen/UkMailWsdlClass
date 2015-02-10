<?php

namespace UkMail\Test\Tracking;

class ArrayOfDomesticSubV1
{

    /**
     * @var DomesticSubV1[] $DomesticSubV1
     */
    protected $DomesticSubV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomesticSubV1[]
     */
    public function getDomesticSubV1()
    {
      return $this->DomesticSubV1;
    }

    /**
     * @param DomesticSubV1[] $DomesticSubV1
     * @return \UkMail\Test\Tracking\ArrayOfDomesticSubV1
     */
    public function setDomesticSubV1(array $DomesticSubV1)
    {
      $this->DomesticSubV1 = $DomesticSubV1;
      return $this;
    }

}
