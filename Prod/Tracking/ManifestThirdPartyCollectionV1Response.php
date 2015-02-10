<?php

namespace UkMail\Prod\Tracking;

class ManifestThirdPartyCollectionV1Response
{

    /**
     * @var ManifestResult $ManifestThirdPartyCollectionV1Result
     */
    protected $ManifestThirdPartyCollectionV1Result = null;

    /**
     * @param ManifestResult $ManifestThirdPartyCollectionV1Result
     */
    public function __construct($ManifestThirdPartyCollectionV1Result = null)
    {
      $this->ManifestThirdPartyCollectionV1Result = $ManifestThirdPartyCollectionV1Result;
    }

    /**
     * @return ManifestResult
     */
    public function getManifestThirdPartyCollectionV1Result()
    {
      return $this->ManifestThirdPartyCollectionV1Result;
    }

    /**
     * @param ManifestResult $ManifestThirdPartyCollectionV1Result
     * @return \UkMail\Prod\Tracking\ManifestThirdPartyCollectionV1Response
     */
    public function setManifestThirdPartyCollectionV1Result($ManifestThirdPartyCollectionV1Result)
    {
      $this->ManifestThirdPartyCollectionV1Result = $ManifestThirdPartyCollectionV1Result;
      return $this;
    }

}
