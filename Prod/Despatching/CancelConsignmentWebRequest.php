<?php

namespace UkMail\Prod\Despatching;

class CancelConsignmentWebRequest extends WebRequest
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
     * @return \UkMail\Prod\Despatching\CancelConsignmentWebRequest
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

}
