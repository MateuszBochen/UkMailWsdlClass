<?php

namespace UkMail\Test\Tracking;

class GetConsignmentDetailsStatus
{

    /**
     * @var int $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $StatusDescription
     */
    protected $StatusDescription = null;

    /**
     * @var int $StatusSequence
     */
    protected $StatusSequence = null;

    /**
     * @var \DateTime $StatusTimeStamp
     */
    protected $StatusTimeStamp = null;

    /**
     * @param int $StatusCode
     * @param string $StatusDescription
     * @param int $StatusSequence
     * @param \DateTime $StatusTimeStamp
     */
    public function __construct($StatusCode = null, $StatusDescription = null, $StatusSequence = null, \DateTime $StatusTimeStamp = null)
    {
      $this->StatusCode = $StatusCode;
      $this->StatusDescription = $StatusDescription;
      $this->StatusSequence = $StatusSequence;
      $this->StatusTimeStamp = $StatusTimeStamp ? $StatusTimeStamp->format(\DateTime::ATOM) : null;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return \UkMail\Test\Tracking\GetConsignmentDetailsStatus
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusDescription()
    {
      return $this->StatusDescription;
    }

    /**
     * @param string $StatusDescription
     * @return \UkMail\Test\Tracking\GetConsignmentDetailsStatus
     */
    public function setStatusDescription($StatusDescription)
    {
      $this->StatusDescription = $StatusDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusSequence()
    {
      return $this->StatusSequence;
    }

    /**
     * @param int $StatusSequence
     * @return \UkMail\Test\Tracking\GetConsignmentDetailsStatus
     */
    public function setStatusSequence($StatusSequence)
    {
      $this->StatusSequence = $StatusSequence;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStatusTimeStamp()
    {
      if ($this->StatusTimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StatusTimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StatusTimeStamp
     * @return \UkMail\Test\Tracking\GetConsignmentDetailsStatus
     */
    public function setStatusTimeStamp(\DateTime $StatusTimeStamp)
    {
      $this->StatusTimeStamp = $StatusTimeStamp->format(\DateTime::ATOM);
      return $this;
    }

}
