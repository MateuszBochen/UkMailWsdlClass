<?php

namespace UkMail\Test\BookCollection;

class AddCollectionWebRequest extends WebRequest
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var boolean $ClosedForLunch
     */
    protected $ClosedForLunch = null;

    /**
     * @var \DateTime $EarliestTime
     */
    protected $EarliestTime = null;

    /**
     * @var \DateTime $LatestTime
     */
    protected $LatestTime = null;

    /**
     * @var \DateTime $RequestedCollectionDate
     */
    protected $RequestedCollectionDate = null;

    /**
     * @var string $SpecialInstructions
     */
    protected $SpecialInstructions = null;

    /**
     * @param boolean $ClosedForLunch
     * @param \DateTime $EarliestTime
     * @param \DateTime $LatestTime
     * @param \DateTime $RequestedCollectionDate
     */
    public function __construct($ClosedForLunch = null, \DateTime $EarliestTime = null, \DateTime $LatestTime = null, \DateTime $RequestedCollectionDate = null)
    {
      parent::__construct();
      $this->ClosedForLunch = $ClosedForLunch;
      $this->EarliestTime = $EarliestTime ? $EarliestTime->format(\DateTime::ATOM) : null;
      $this->LatestTime = $LatestTime ? $LatestTime->format(\DateTime::ATOM) : null;
      $this->RequestedCollectionDate = $RequestedCollectionDate ? $RequestedCollectionDate->format(\DateTime::ATOM) : null;
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
     * @return \UkMail\Test\BookCollection\AddCollectionWebRequest
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClosedForLunch()
    {
      return $this->ClosedForLunch;
    }

    /**
     * @param boolean $ClosedForLunch
     * @return \UkMail\Test\BookCollection\AddCollectionWebRequest
     */
    public function setClosedForLunch($ClosedForLunch)
    {
      $this->ClosedForLunch = $ClosedForLunch;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEarliestTime()
    {
      if ($this->EarliestTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EarliestTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EarliestTime
     * @return \UkMail\Test\BookCollection\AddCollectionWebRequest
     */
    public function setEarliestTime(\DateTime $EarliestTime)
    {
      $this->EarliestTime = $EarliestTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLatestTime()
    {
      if ($this->LatestTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LatestTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LatestTime
     * @return \UkMail\Test\BookCollection\AddCollectionWebRequest
     */
    public function setLatestTime(\DateTime $LatestTime)
    {
      $this->LatestTime = $LatestTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedCollectionDate()
    {
      if ($this->RequestedCollectionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RequestedCollectionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RequestedCollectionDate
     * @return \UkMail\Test\BookCollection\AddCollectionWebRequest
     */
    public function setRequestedCollectionDate(\DateTime $RequestedCollectionDate)
    {
      $this->RequestedCollectionDate = $RequestedCollectionDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialInstructions()
    {
      return $this->SpecialInstructions;
    }

    /**
     * @param string $SpecialInstructions
     * @return \UkMail\Test\BookCollection\AddCollectionWebRequest
     */
    public function setSpecialInstructions($SpecialInstructions)
    {
      $this->SpecialInstructions = $SpecialInstructions;
      return $this;
    }

}
