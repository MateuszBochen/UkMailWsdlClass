<?php

namespace UkMail\Test\Tracking;

class ArrayOfConsignmentNote
{

    /**
     * @var ConsignmentNote[] $ConsignmentNote
     */
    protected $ConsignmentNote = null;

    /**
     * @param ConsignmentNote[] $ConsignmentNote
     */
    public function __construct(array $ConsignmentNote = null)
    {
      $this->ConsignmentNote = $ConsignmentNote;
    }

    /**
     * @return ConsignmentNote[]
     */
    public function getConsignmentNote()
    {
      return $this->ConsignmentNote;
    }

    /**
     * @param ConsignmentNote[] $ConsignmentNote
     * @return \UkMail\Test\Tracking\ArrayOfConsignmentNote
     */
    public function setConsignmentNote(array $ConsignmentNote)
    {
      $this->ConsignmentNote = $ConsignmentNote;
      return $this;
    }

}
