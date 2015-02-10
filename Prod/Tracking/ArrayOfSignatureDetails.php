<?php

namespace UkMail\Prod\Tracking;

class ArrayOfSignatureDetails
{

    /**
     * @var SignatureDetails[] $SignatureDetails
     */
    protected $SignatureDetails = null;

    /**
     * @param SignatureDetails[] $SignatureDetails
     */
    public function __construct(array $SignatureDetails = null)
    {
      $this->SignatureDetails = $SignatureDetails;
    }

    /**
     * @return SignatureDetails[]
     */
    public function getSignatureDetails()
    {
      return $this->SignatureDetails;
    }

    /**
     * @param SignatureDetails[] $SignatureDetails
     * @return \UkMail\Prod\Tracking\ArrayOfSignatureDetails
     */
    public function setSignatureDetails(array $SignatureDetails)
    {
      $this->SignatureDetails = $SignatureDetails;
      return $this;
    }

}
