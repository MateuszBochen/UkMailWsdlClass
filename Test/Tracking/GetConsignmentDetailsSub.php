<?php

namespace UkMail\Test\Tracking;

class GetConsignmentDetailsSub
{

    /**
     * @var string $SubEmail
     */
    protected $SubEmail = null;

    /**
     * @var string $SubInstructions
     */
    protected $SubInstructions = null;

    /**
     * @var string $SubName
     */
    protected $SubName = null;

    /**
     * @var string $SubPhone
     */
    protected $SubPhone = null;

    /**
     * @var string $SubRef1
     */
    protected $SubRef1 = null;

    /**
     * @var string $SubRef2
     */
    protected $SubRef2 = null;

    /**
     * @var int $SubSequence
     */
    protected $SubSequence = null;

    /**
     * @param string $SubEmail
     * @param string $SubInstructions
     * @param string $SubName
     * @param string $SubPhone
     * @param string $SubRef1
     * @param string $SubRef2
     * @param int $SubSequence
     */
    public function __construct($SubEmail = null, $SubInstructions = null, $SubName = null, $SubPhone = null, $SubRef1 = null, $SubRef2 = null, $SubSequence = null)
    {
      $this->SubEmail = $SubEmail;
      $this->SubInstructions = $SubInstructions;
      $this->SubName = $SubName;
      $this->SubPhone = $SubPhone;
      $this->SubRef1 = $SubRef1;
      $this->SubRef2 = $SubRef2;
      $this->SubSequence = $SubSequence;
    }

    /**
     * @return string
     */
    public function getSubEmail()
    {
      return $this->SubEmail;
    }

    /**
     * @param string $SubEmail
     * @return \UkMail\Test\Tracking\GetConsignmentDetailsSub
     */
    public function setSubEmail($SubEmail)
    {
      $this->SubEmail = $SubEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubInstructions()
    {
      return $this->SubInstructions;
    }

    /**
     * @param string $SubInstructions
     * @return \UkMail\Test\Tracking\GetConsignmentDetailsSub
     */
    public function setSubInstructions($SubInstructions)
    {
      $this->SubInstructions = $SubInstructions;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubName()
    {
      return $this->SubName;
    }

    /**
     * @param string $SubName
     * @return \UkMail\Test\Tracking\GetConsignmentDetailsSub
     */
    public function setSubName($SubName)
    {
      $this->SubName = $SubName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubPhone()
    {
      return $this->SubPhone;
    }

    /**
     * @param string $SubPhone
     * @return \UkMail\Test\Tracking\GetConsignmentDetailsSub
     */
    public function setSubPhone($SubPhone)
    {
      $this->SubPhone = $SubPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubRef1()
    {
      return $this->SubRef1;
    }

    /**
     * @param string $SubRef1
     * @return \UkMail\Test\Tracking\GetConsignmentDetailsSub
     */
    public function setSubRef1($SubRef1)
    {
      $this->SubRef1 = $SubRef1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubRef2()
    {
      return $this->SubRef2;
    }

    /**
     * @param string $SubRef2
     * @return \UkMail\Test\Tracking\GetConsignmentDetailsSub
     */
    public function setSubRef2($SubRef2)
    {
      $this->SubRef2 = $SubRef2;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubSequence()
    {
      return $this->SubSequence;
    }

    /**
     * @param int $SubSequence
     * @return \UkMail\Test\Tracking\GetConsignmentDetailsSub
     */
    public function setSubSequence($SubSequence)
    {
      $this->SubSequence = $SubSequence;
      return $this;
    }

}
