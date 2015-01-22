<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

class CancelReturnWebRequest extends WebRequest
{

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getConsignmentNumber()
    {
      return $this->ConsignmentNumber;
    }

    /**
     * @param string $ConsignmentNumber
     * @return \UkMail\Test\DespatchingDomesticConsignments\CancelReturnWebRequest
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

}
