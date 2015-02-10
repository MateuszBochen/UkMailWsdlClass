<?php

namespace UkMail\Test\Tracking;

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
     * @return \UkMail\Test\Tracking\ArrayOfSignatureDetails
     */
    public function setSignatureDetails(array $SignatureDetails)
    {
      $this->SignatureDetails = $SignatureDetails;
      return $this;
    }

}
