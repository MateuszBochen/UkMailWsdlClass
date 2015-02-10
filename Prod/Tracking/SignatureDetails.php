<?php

namespace UkMail\Prod\Tracking;

class SignatureDetails
{

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    /**
     * @var \DateTime $PODDateTime
     */
    protected $PODDateTime = null;

    /**
     * @var int $ItemsDelivered
     */
    protected $ItemsDelivered = null;

    /**
     * @var string $Recipient
     */
    protected $Recipient = null;

    /**
     * @var ImageType $ImageType
     */
    protected $ImageType = null;

    /**
     * @var base64Binary $SignatureImageArray
     */
    protected $SignatureImageArray = null;

    /**
     * @param string $ConsignmentNumber
     * @param \DateTime $PODDateTime
     * @param int $ItemsDelivered
     * @param string $Recipient
     * @param ImageType $ImageType
     * @param base64Binary $SignatureImageArray
     */
    public function __construct($ConsignmentNumber = null, \DateTime $PODDateTime = null, $ItemsDelivered = null, $Recipient = null, $ImageType = null, $SignatureImageArray = null)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      $this->PODDateTime = $PODDateTime ? $PODDateTime->format(\DateTime::ATOM) : null;
      $this->ItemsDelivered = $ItemsDelivered;
      $this->Recipient = $Recipient;
      $this->ImageType = $ImageType;
      $this->SignatureImageArray = $SignatureImageArray;
    }

    /**
     * @return string
     */
    public function getConsignmentNumber()
    {
      return $this->ConsignmentNumber;
    }

    /**
     * @param string $ConsignmentNumber
     * @return \UkMail\Prod\Tracking\SignatureDetails
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPODDateTime()
    {
      if ($this->PODDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PODDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PODDateTime
     * @return \UkMail\Prod\Tracking\SignatureDetails
     */
    public function setPODDateTime(\DateTime $PODDateTime)
    {
      $this->PODDateTime = $PODDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getItemsDelivered()
    {
      return $this->ItemsDelivered;
    }

    /**
     * @param int $ItemsDelivered
     * @return \UkMail\Prod\Tracking\SignatureDetails
     */
    public function setItemsDelivered($ItemsDelivered)
    {
      $this->ItemsDelivered = $ItemsDelivered;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipient()
    {
      return $this->Recipient;
    }

    /**
     * @param string $Recipient
     * @return \UkMail\Prod\Tracking\SignatureDetails
     */
    public function setRecipient($Recipient)
    {
      $this->Recipient = $Recipient;
      return $this;
    }

    /**
     * @return ImageType
     */
    public function getImageType()
    {
      return $this->ImageType;
    }

    /**
     * @param ImageType $ImageType
     * @return \UkMail\Prod\Tracking\SignatureDetails
     */
    public function setImageType($ImageType)
    {
      $this->ImageType = $ImageType;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getSignatureImageArray()
    {
      return $this->SignatureImageArray;
    }

    /**
     * @param base64Binary $SignatureImageArray
     * @return \UkMail\Prod\Tracking\SignatureDetails
     */
    public function setSignatureImageArray($SignatureImageArray)
    {
      $this->SignatureImageArray = $SignatureImageArray;
      return $this;
    }

}
