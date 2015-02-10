<?php

namespace UkMail\Prod\Tracking;

class ConsignmentNumberRange
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var string $ConsignmentNumberRangeStart
     */
    protected $ConsignmentNumberRangeStart = null;

    /**
     * @var string $ConsignmentNumberRangeEnd
     */
    protected $ConsignmentNumberRangeEnd = null;

    /**
     * @var \DateTime $DateRequested
     */
    protected $DateRequested = null;

    /**
     * @var \DateTime $DateActivated
     */
    protected $DateActivated = null;

    /**
     * @var ActivationStatus $ActivationState
     */
    protected $ActivationState = null;

    /**
     * @param string $AccountNumber
     * @param string $ConsignmentNumberRangeStart
     * @param string $ConsignmentNumberRangeEnd
     * @param \DateTime $DateRequested
     * @param \DateTime $DateActivated
     * @param ActivationStatus $ActivationState
     */
    public function __construct($AccountNumber = null, $ConsignmentNumberRangeStart = null, $ConsignmentNumberRangeEnd = null, \DateTime $DateRequested = null, \DateTime $DateActivated = null, $ActivationState = null)
    {
      $this->AccountNumber = $AccountNumber;
      $this->ConsignmentNumberRangeStart = $ConsignmentNumberRangeStart;
      $this->ConsignmentNumberRangeEnd = $ConsignmentNumberRangeEnd;
      $this->DateRequested = $DateRequested ? $DateRequested->format(\DateTime::ATOM) : null;
      $this->DateActivated = $DateActivated ? $DateActivated->format(\DateTime::ATOM) : null;
      $this->ActivationState = $ActivationState;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \UkMail\Prod\Tracking\ConsignmentNumberRange
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentNumberRangeStart()
    {
      return $this->ConsignmentNumberRangeStart;
    }

    /**
     * @param string $ConsignmentNumberRangeStart
     * @return \UkMail\Prod\Tracking\ConsignmentNumberRange
     */
    public function setConsignmentNumberRangeStart($ConsignmentNumberRangeStart)
    {
      $this->ConsignmentNumberRangeStart = $ConsignmentNumberRangeStart;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentNumberRangeEnd()
    {
      return $this->ConsignmentNumberRangeEnd;
    }

    /**
     * @param string $ConsignmentNumberRangeEnd
     * @return \UkMail\Prod\Tracking\ConsignmentNumberRange
     */
    public function setConsignmentNumberRangeEnd($ConsignmentNumberRangeEnd)
    {
      $this->ConsignmentNumberRangeEnd = $ConsignmentNumberRangeEnd;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateRequested()
    {
      if ($this->DateRequested == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateRequested);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateRequested
     * @return \UkMail\Prod\Tracking\ConsignmentNumberRange
     */
    public function setDateRequested(\DateTime $DateRequested)
    {
      $this->DateRequested = $DateRequested->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateActivated()
    {
      if ($this->DateActivated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateActivated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateActivated
     * @return \UkMail\Prod\Tracking\ConsignmentNumberRange
     */
    public function setDateActivated(\DateTime $DateActivated)
    {
      $this->DateActivated = $DateActivated->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ActivationStatus
     */
    public function getActivationState()
    {
      return $this->ActivationState;
    }

    /**
     * @param ActivationStatus $ActivationState
     * @return \UkMail\Prod\Tracking\ConsignmentNumberRange
     */
    public function setActivationState($ActivationState)
    {
      $this->ActivationState = $ActivationState;
      return $this;
    }

}
