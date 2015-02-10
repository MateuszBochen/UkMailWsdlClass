<?php

namespace UkMail\Test\Tracking;

class ArrayOfError
{

    /**
     * @var Error[] $Error
     */
    protected $Error = null;

    /**
     * @param Error[] $Error
     */
    public function __construct(array $Error = null)
    {
      $this->Error = $Error;
    }

    /**
     * @return Error[]
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param Error[] $Error
     * @return \UkMail\Test\Tracking\ArrayOfError
     */
    public function setError(array $Error)
    {
      $this->Error = $Error;
      return $this;
    }

}
