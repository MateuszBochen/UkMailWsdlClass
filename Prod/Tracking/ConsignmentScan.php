<?php

namespace UkMail\Prod\Tracking;

class ConsignmentScan
{

    /**
     * @var string $ScanLocation
     */
    protected $ScanLocation = null;

    /**
     * @var int $ScanParcel
     */
    protected $ScanParcel = null;

    /**
     * @var int $ScanSequence
     */
    protected $ScanSequence = null;

    /**
     * @var \DateTime $ScanTimeStamp
     */
    protected $ScanTimeStamp = null;

    /**
     * @var string $ScanType
     */
    protected $ScanType = null;

    /**
     * @param string $ScanLocation
     * @param int $ScanParcel
     * @param int $ScanSequence
     * @param \DateTime $ScanTimeStamp
     * @param string $ScanType
     */
    public function __construct($ScanLocation = null, $ScanParcel = null, $ScanSequence = null, \DateTime $ScanTimeStamp = null, $ScanType = null)
    {
      $this->ScanLocation = $ScanLocation;
      $this->ScanParcel = $ScanParcel;
      $this->ScanSequence = $ScanSequence;
      $this->ScanTimeStamp = $ScanTimeStamp ? $ScanTimeStamp->format(\DateTime::ATOM) : null;
      $this->ScanType = $ScanType;
    }

    /**
     * @return string
     */
    public function getScanLocation()
    {
      return $this->ScanLocation;
    }

    /**
     * @param string $ScanLocation
     * @return \UkMail\Prod\Tracking\ConsignmentScan
     */
    public function setScanLocation($ScanLocation)
    {
      $this->ScanLocation = $ScanLocation;
      return $this;
    }

    /**
     * @return int
     */
    public function getScanParcel()
    {
      return $this->ScanParcel;
    }

    /**
     * @param int $ScanParcel
     * @return \UkMail\Prod\Tracking\ConsignmentScan
     */
    public function setScanParcel($ScanParcel)
    {
      $this->ScanParcel = $ScanParcel;
      return $this;
    }

    /**
     * @return int
     */
    public function getScanSequence()
    {
      return $this->ScanSequence;
    }

    /**
     * @param int $ScanSequence
     * @return \UkMail\Prod\Tracking\ConsignmentScan
     */
    public function setScanSequence($ScanSequence)
    {
      $this->ScanSequence = $ScanSequence;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScanTimeStamp()
    {
      if ($this->ScanTimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScanTimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScanTimeStamp
     * @return \UkMail\Prod\Tracking\ConsignmentScan
     */
    public function setScanTimeStamp(\DateTime $ScanTimeStamp)
    {
      $this->ScanTimeStamp = $ScanTimeStamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getScanType()
    {
      return $this->ScanType;
    }

    /**
     * @param string $ScanType
     * @return \UkMail\Prod\Tracking\ConsignmentScan
     */
    public function setScanType($ScanType)
    {
      $this->ScanType = $ScanType;
      return $this;
    }

}
