<?php

namespace UkMail\Prod\SecurityModel;

class ArrayOfUKMWebWarningCustom
{

    /**
     * @var UKMWebWarning[] $UKMWebWarning
     */
    protected $UKMWebWarning = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UKMWebWarning[]
     */
    public function getUKMWebWarning()
    {
      return $this->UKMWebWarning;
    }

    /**
     * @param UKMWebWarning[] $UKMWebWarning
     * @return \UkMail\Prod\SecurityModel\ArrayOfUKMWebWarning
     */
    public function setUKMWebWarning(array $UKMWebWarning)
    {
      $this->UKMWebWarning = $UKMWebWarning;
      return $this;
    }

}
