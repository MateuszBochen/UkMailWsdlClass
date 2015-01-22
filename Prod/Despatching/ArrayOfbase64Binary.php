<?php

namespace UkMail\Prod\Despatching;

class ArrayOfbase64Binary
{

    /**
     * @var base64Binary[] $base64Binary
     */
    protected $base64Binary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return base64Binary[]
     */
    public function getBase64Binary()
    {
      return $this->base64Binary;
    }

    /**
     * @param base64Binary[] $base64Binary
     * @return \UkMail\Prod\Despatching\ArrayOfbase64Binary
     */
    public function setBase64Binary(array $base64Binary)
    {
      $this->base64Binary = $base64Binary;
      return $this;
    }

}
