<?php

namespace UkMail\Test\Tracking;

class ParcelScanV1
{

    /**
     * @var string $ScannedBarcode
     */
    protected $ScannedBarcode = null;

    /**
     * @var \DateTime $ScanDateTime
     */
    protected $ScanDateTime = null;

    /**
     * @var string $ScanUserID
     */
    protected $ScanUserID = null;

    /**
     * @var int $LocationID
     */
    protected $LocationID = null;

    /**
     * @var string $ScanType
     */
    protected $ScanType = null;

    /**
     * @var string $PartnerLocation
     */
    protected $PartnerLocation = null;

    /**
     * @param string $ScannedBarcode
     * @param \DateTime $ScanDateTime
     * @param string $ScanUserID
     * @param int $LocationID
     * @param string $ScanType
     * @param string $PartnerLocation
     */
    public function __construct($ScannedBarcode = null, \DateTime $ScanDateTime = null, $ScanUserID = null, $LocationID = null, $ScanType = null, $PartnerLocation = null)
    {
      $this->ScannedBarcode = $ScannedBarcode;
      $this->ScanDateTime = $ScanDateTime ? $ScanDateTime->format(\DateTime::ATOM) : null;
      $this->ScanUserID = $ScanUserID;
      $this->LocationID = $LocationID;
      $this->ScanType = $ScanType;
      $this->PartnerLocation = $PartnerLocation;
    }

    /**
     * @return string
     */
    public function getScannedBarcode()
    {
      return $this->ScannedBarcode;
    }

    /**
     * @param string $ScannedBarcode
     * @return \UkMail\Test\Tracking\ParcelScanV1
     */
    public function setScannedBarcode($ScannedBarcode)
    {
      $this->ScannedBarcode = $ScannedBarcode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScanDateTime()
    {
      if ($this->ScanDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScanDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScanDateTime
     * @return \UkMail\Test\Tracking\ParcelScanV1
     */
    public function setScanDateTime(\DateTime $ScanDateTime)
    {
      $this->ScanDateTime = $ScanDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getScanUserID()
    {
      return $this->ScanUserID;
    }

    /**
     * @param string $ScanUserID
     * @return \UkMail\Test\Tracking\ParcelScanV1
     */
    public function setScanUserID($ScanUserID)
    {
      $this->ScanUserID = $ScanUserID;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param int $LocationID
     * @return \UkMail\Test\Tracking\ParcelScanV1
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
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
     * @return \UkMail\Test\Tracking\ParcelScanV1
     */
    public function setScanType($ScanType)
    {
      $this->ScanType = $ScanType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerLocation()
    {
      return $this->PartnerLocation;
    }

    /**
     * @param string $PartnerLocation
     * @return \UkMail\Test\Tracking\ParcelScanV1
     */
    public function setPartnerLocation($PartnerLocation)
    {
      $this->PartnerLocation = $PartnerLocation;
      return $this;
    }

}
