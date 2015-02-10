<?php

namespace UkMail\Test\Tracking;

class ManifestDomesticV1Response
{

    /**
     * @var ManifestResult $ManifestDomesticV1Result
     */
    protected $ManifestDomesticV1Result = null;

    /**
     * @param ManifestResult $ManifestDomesticV1Result
     */
    public function __construct($ManifestDomesticV1Result = null)
    {
      $this->ManifestDomesticV1Result = $ManifestDomesticV1Result;
    }

    /**
     * @return ManifestResult
     */
    public function getManifestDomesticV1Result()
    {
      return $this->ManifestDomesticV1Result;
    }

    /**
     * @param ManifestResult $ManifestDomesticV1Result
     * @return \UkMail\Test\Tracking\ManifestDomesticV1Response
     */
    public function setManifestDomesticV1Result($ManifestDomesticV1Result)
    {
      $this->ManifestDomesticV1Result = $ManifestDomesticV1Result;
      return $this;
    }

}
