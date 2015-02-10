<?php

namespace UkMail\Test\Tracking;

class ManifestCarriageForwardCollectionV1Response
{

    /**
     * @var ManifestResult $ManifestCarriageForwardCollectionV1Result
     */
    protected $ManifestCarriageForwardCollectionV1Result = null;

    /**
     * @param ManifestResult $ManifestCarriageForwardCollectionV1Result
     */
    public function __construct($ManifestCarriageForwardCollectionV1Result = null)
    {
      $this->ManifestCarriageForwardCollectionV1Result = $ManifestCarriageForwardCollectionV1Result;
    }

    /**
     * @return ManifestResult
     */
    public function getManifestCarriageForwardCollectionV1Result()
    {
      return $this->ManifestCarriageForwardCollectionV1Result;
    }

    /**
     * @param ManifestResult $ManifestCarriageForwardCollectionV1Result
     * @return \UkMail\Test\Tracking\ManifestCarriageForwardCollectionV1Response
     */
    public function setManifestCarriageForwardCollectionV1Result($ManifestCarriageForwardCollectionV1Result)
    {
      $this->ManifestCarriageForwardCollectionV1Result = $ManifestCarriageForwardCollectionV1Result;
      return $this;
    }

}
