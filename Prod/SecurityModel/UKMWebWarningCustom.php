<?php

namespace UkMail\Prod\SecurityModel;

class UKMWebWarningCustom
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \UkMail\Prod\SecurityModel\UKMWebWarning
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \UkMail\Prod\SecurityModel\UKMWebWarning
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
