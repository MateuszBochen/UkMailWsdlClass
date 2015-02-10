<?php

namespace UkMail\Prod\Tracking;

class ManifestInternationalV1Response
{

    /**
     * @var ManifestResult $ManifestInternationalV1Result
     */
    protected $ManifestInternationalV1Result = null;

    /**
     * @param ManifestResult $ManifestInternationalV1Result
     */
    public function __construct($ManifestInternationalV1Result = null)
    {
      $this->ManifestInternationalV1Result = $ManifestInternationalV1Result;
    }

    /**
     * @return ManifestResult
     */
    public function getManifestInternationalV1Result()
    {
      return $this->ManifestInternationalV1Result;
    }

    /**
     * @param ManifestResult $ManifestInternationalV1Result
     * @return \UkMail\Prod\Tracking\ManifestInternationalV1Response
     */
    public function setManifestInternationalV1Result($ManifestInternationalV1Result)
    {
      $this->ManifestInternationalV1Result = $ManifestInternationalV1Result;
      return $this;
    }

}
