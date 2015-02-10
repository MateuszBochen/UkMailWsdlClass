<?php

namespace UkMail\Test\Tracking;

class ConsignmentPOC
{

    /**
     * @var string $POCDescription
     */
    protected $POCDescription = null;

    /**
     * @var string $POCFail
     */
    protected $POCFail = null;

    /**
     * @var int $POCSequence
     */
    protected $POCSequence = null;

    /**
     * @var \DateTime $POCTimeStamp
     */
    protected $POCTimeStamp = null;

    /**
     * @param string $POCDescription
     * @param string $POCFail
     * @param int $POCSequence
     * @param \DateTime $POCTimeStamp
     */
    public function __construct($POCDescription = null, $POCFail = null, $POCSequence = null, \DateTime $POCTimeStamp = null)
    {
      $this->POCDescription = $POCDescription;
      $this->POCFail = $POCFail;
      $this->POCSequence = $POCSequence;
      $this->POCTimeStamp = $POCTimeStamp ? $POCTimeStamp->format(\DateTime::ATOM) : null;
    }

    /**
     * @return string
     */
    public function getPOCDescription()
    {
      return $this->POCDescription;
    }

    /**
     * @param string $POCDescription
     * @return \UkMail\Test\Tracking\ConsignmentPOC
     */
    public function setPOCDescription($POCDescription)
    {
      $this->POCDescription = $POCDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getPOCFail()
    {
      return $this->POCFail;
    }

    /**
     * @param string $POCFail
     * @return \UkMail\Test\Tracking\ConsignmentPOC
     */
    public function setPOCFail($POCFail)
    {
      $this->POCFail = $POCFail;
      return $this;
    }

    /**
     * @return int
     */
    public function getPOCSequence()
    {
      return $this->POCSequence;
    }

    /**
     * @param int $POCSequence
     * @return \UkMail\Test\Tracking\ConsignmentPOC
     */
    public function setPOCSequence($POCSequence)
    {
      $this->POCSequence = $POCSequence;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPOCTimeStamp()
    {
      if ($this->POCTimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->POCTimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $POCTimeStamp
     * @return \UkMail\Test\Tracking\ConsignmentPOC
     */
    public function setPOCTimeStamp(\DateTime $POCTimeStamp)
    {
      $this->POCTimeStamp = $POCTimeStamp->format(\DateTime::ATOM);
      return $this;
    }

}
