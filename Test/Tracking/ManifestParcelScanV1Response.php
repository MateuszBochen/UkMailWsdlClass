<?php

namespace UkMail\Test\Tracking;

class ManifestParcelScanV1Response
{

    /**
     * @var ManifestResult $ManifestParcelScanV1Result
     */
    protected $ManifestParcelScanV1Result = null;

    /**
     * @param ManifestResult $ManifestParcelScanV1Result
     */
    public function __construct($ManifestParcelScanV1Result = null)
    {
      $this->ManifestParcelScanV1Result = $ManifestParcelScanV1Result;
    }

    /**
     * @return ManifestResult
     */
    public function getManifestParcelScanV1Result()
    {
      return $this->ManifestParcelScanV1Result;
    }

    /**
     * @param ManifestResult $ManifestParcelScanV1Result
     * @return \UkMail\Test\Tracking\ManifestParcelScanV1Response
     */
    public function setManifestParcelScanV1Result($ManifestParcelScanV1Result)
    {
      $this->ManifestParcelScanV1Result = $ManifestParcelScanV1Result;
      return $this;
    }

}
