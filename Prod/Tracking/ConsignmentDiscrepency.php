<?php

namespace UkMail\Prod\Tracking;

class ConsignmentDiscrepency
{

    /**
     * @var string $DiscrepencyReason
     */
    protected $DiscrepencyReason = null;

    /**
     * @var int $DiscrepencySequence
     */
    protected $DiscrepencySequence = null;

    /**
     * @var string $DiscrepencyText
     */
    protected $DiscrepencyText = null;

    /**
     * @var \DateTime $DiscrepencyTimeStamp
     */
    protected $DiscrepencyTimeStamp = null;

    /**
     * @param string $DiscrepencyReason
     * @param int $DiscrepencySequence
     * @param string $DiscrepencyText
     * @param \DateTime $DiscrepencyTimeStamp
     */
    public function __construct($DiscrepencyReason = null, $DiscrepencySequence = null, $DiscrepencyText = null, \DateTime $DiscrepencyTimeStamp = null)
    {
      $this->DiscrepencyReason = $DiscrepencyReason;
      $this->DiscrepencySequence = $DiscrepencySequence;
      $this->DiscrepencyText = $DiscrepencyText;
      $this->DiscrepencyTimeStamp = $DiscrepencyTimeStamp ? $DiscrepencyTimeStamp->format(\DateTime::ATOM) : null;
    }

    /**
     * @return string
     */
    public function getDiscrepencyReason()
    {
      return $this->DiscrepencyReason;
    }

    /**
     * @param string $DiscrepencyReason
     * @return \UkMail\Prod\Tracking\ConsignmentDiscrepency
     */
    public function setDiscrepencyReason($DiscrepencyReason)
    {
      $this->DiscrepencyReason = $DiscrepencyReason;
      return $this;
    }

    /**
     * @return int
     */
    public function getDiscrepencySequence()
    {
      return $this->DiscrepencySequence;
    }

    /**
     * @param int $DiscrepencySequence
     * @return \UkMail\Prod\Tracking\ConsignmentDiscrepency
     */
    public function setDiscrepencySequence($DiscrepencySequence)
    {
      $this->DiscrepencySequence = $DiscrepencySequence;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscrepencyText()
    {
      return $this->DiscrepencyText;
    }

    /**
     * @param string $DiscrepencyText
     * @return \UkMail\Prod\Tracking\ConsignmentDiscrepency
     */
    public function setDiscrepencyText($DiscrepencyText)
    {
      $this->DiscrepencyText = $DiscrepencyText;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDiscrepencyTimeStamp()
    {
      if ($this->DiscrepencyTimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DiscrepencyTimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DiscrepencyTimeStamp
     * @return \UkMail\Prod\Tracking\ConsignmentDiscrepency
     */
    public function setDiscrepencyTimeStamp(\DateTime $DiscrepencyTimeStamp)
    {
      $this->DiscrepencyTimeStamp = $DiscrepencyTimeStamp->format(\DateTime::ATOM);
      return $this;
    }

}
