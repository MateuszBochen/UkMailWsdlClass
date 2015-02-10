<?php

namespace UkMail\Test\Tracking;

class GetConsignmentStatus
{

    /**
     * @var int $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $StatusMessage
     */
    protected $StatusMessage = null;

    /**
     * @var \DateTime $OriginalDeliveryDate
     */
    protected $OriginalDeliveryDate = null;

    /**
     * @var \DateTime $ExpectedDeliveryDate
     */
    protected $ExpectedDeliveryDate = null;

    /**
     * @param int $StatusCode
     * @param string $StatusMessage
     * @param \DateTime $OriginalDeliveryDate
     * @param \DateTime $ExpectedDeliveryDate
     */
    public function __construct($StatusCode = null, $StatusMessage = null, \DateTime $OriginalDeliveryDate = null, \DateTime $ExpectedDeliveryDate = null)
    {
      $this->StatusCode = $StatusCode;
      $this->StatusMessage = $StatusMessage;
      $this->OriginalDeliveryDate = $OriginalDeliveryDate ? $OriginalDeliveryDate->format(\DateTime::ATOM) : null;
      $this->ExpectedDeliveryDate = $ExpectedDeliveryDate ? $ExpectedDeliveryDate->format(\DateTime::ATOM) : null;
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
     * @return \UkMail\Test\Tracking\GetConsignmentStatus
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return \UkMail\Test\Tracking\GetConsignmentStatus
     */
    public function setStatusMessage($StatusMessage)
    {
      $this->StatusMessage = $StatusMessage;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOriginalDeliveryDate()
    {
      if ($this->OriginalDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OriginalDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OriginalDeliveryDate
     * @return \UkMail\Test\Tracking\GetConsignmentStatus
     */
    public function setOriginalDeliveryDate(\DateTime $OriginalDeliveryDate)
    {
      $this->OriginalDeliveryDate = $OriginalDeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDeliveryDate()
    {
      if ($this->ExpectedDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpectedDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpectedDeliveryDate
     * @return \UkMail\Test\Tracking\GetConsignmentStatus
     */
    public function setExpectedDeliveryDate(\DateTime $ExpectedDeliveryDate)
    {
      $this->ExpectedDeliveryDate = $ExpectedDeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

}
