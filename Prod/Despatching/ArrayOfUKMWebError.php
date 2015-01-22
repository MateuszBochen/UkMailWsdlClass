<?php

namespace UkMail\Prod\Despatching;

class ArrayOfUKMWebError
{

    /**
     * @var UKMWebError[] $UKMWebError
     */
    protected $UKMWebError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UKMWebError[]
     */
    public function getUKMWebError()
    {
      return $this->UKMWebError;
    }

    /**
     * @param UKMWebError[] $UKMWebError
     * @return \UkMail\Prod\Despatching\ArrayOfUKMWebError
     */
    public function setUKMWebError(array $UKMWebError)
    {
      $this->UKMWebError = $UKMWebError;
      return $this;
    }

}
