<?php

namespace UkMail\Prod\BookCollection;

class ArrayOfUKMWebWarning
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
     * @return \UkMail\Prod\BookCollection\ArrayOfUKMWebWarning
     */
    public function setUKMWebWarning(array $UKMWebWarning)
    {
      $this->UKMWebWarning = $UKMWebWarning;
      return $this;
    }

}
