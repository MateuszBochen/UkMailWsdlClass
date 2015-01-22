<?php

namespace UkMail\Test\SecurityModel;

class ArrayOfUKMWebErrorCustom
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
     * @return \UkMail\Test\SecurityModel\ArrayOfUKMWebError
     */
    public function setUKMWebError(array $UKMWebError)
    {
      $this->UKMWebError = $UKMWebError;
      return $this;
    }

}
