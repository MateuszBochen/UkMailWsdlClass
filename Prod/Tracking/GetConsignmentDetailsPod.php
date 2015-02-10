<?php

namespace UkMail\Prod\Tracking;

class GetConsignmentDetailsPod
{

    /**
     * @var string $PodDescription
     */
    protected $PodDescription = null;

    /**
     * @var int $PodQuantity
     */
    protected $PodQuantity = null;

    /**
     * @var int $PodSequence
     */
    protected $PodSequence = null;

    /**
     * @var \DateTime $PodTimeStamp
     */
    protected $PodTimeStamp = null;

    /**
     * @var string $PodRecipientName
     */
    protected $PodRecipientName = null;

    /**
     * @var string $PodDeliveryComments
     */
    protected $PodDeliveryComments = null;

    /**
     * @var string $PodDeliveryTypeCode
     */
    protected $PodDeliveryTypeCode = null;

    /**
     * @param string $PodDescription
     * @param int $PodQuantity
     * @param int $PodSequence
     * @param \DateTime $PodTimeStamp
     * @param string $PodRecipientName
     * @param string $PodDeliveryComments
     * @param string $PodDeliveryTypeCode
     */
    public function __construct($PodDescription = null, $PodQuantity = null, $PodSequence = null, \DateTime $PodTimeStamp = null, $PodRecipientName = null, $PodDeliveryComments = null, $PodDeliveryTypeCode = null)
    {
      $this->PodDescription = $PodDescription;
      $this->PodQuantity = $PodQuantity;
      $this->PodSequence = $PodSequence;
      $this->PodTimeStamp = $PodTimeStamp ? $PodTimeStamp->format(\DateTime::ATOM) : null;
      $this->PodRecipientName = $PodRecipientName;
      $this->PodDeliveryComments = $PodDeliveryComments;
      $this->PodDeliveryTypeCode = $PodDeliveryTypeCode;
    }

    /**
     * @return string
     */
    public function getPodDescription()
    {
      return $this->PodDescription;
    }

    /**
     * @param string $PodDescription
     * @return \UkMail\Prod\Tracking\GetConsignmentDetailsPod
     */
    public function setPodDescription($PodDescription)
    {
      $this->PodDescription = $PodDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getPodQuantity()
    {
      return $this->PodQuantity;
    }

    /**
     * @param int $PodQuantity
     * @return \UkMail\Prod\Tracking\GetConsignmentDetailsPod
     */
    public function setPodQuantity($PodQuantity)
    {
      $this->PodQuantity = $PodQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getPodSequence()
    {
      return $this->PodSequence;
    }

    /**
     * @param int $PodSequence
     * @return \UkMail\Prod\Tracking\GetConsignmentDetailsPod
     */
    public function setPodSequence($PodSequence)
    {
      $this->PodSequence = $PodSequence;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPodTimeStamp()
    {
      if ($this->PodTimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PodTimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PodTimeStamp
     * @return \UkMail\Prod\Tracking\GetConsignmentDetailsPod
     */
    public function setPodTimeStamp(\DateTime $PodTimeStamp)
    {
      $this->PodTimeStamp = $PodTimeStamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getPodRecipientName()
    {
      return $this->PodRecipientName;
    }

    /**
     * @param string $PodRecipientName
     * @return \UkMail\Prod\Tracking\GetConsignmentDetailsPod
     */
    public function setPodRecipientName($PodRecipientName)
    {
      $this->PodRecipientName = $PodRecipientName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPodDeliveryComments()
    {
      return $this->PodDeliveryComments;
    }

    /**
     * @param string $PodDeliveryComments
     * @return \UkMail\Prod\Tracking\GetConsignmentDetailsPod
     */
    public function setPodDeliveryComments($PodDeliveryComments)
    {
      $this->PodDeliveryComments = $PodDeliveryComments;
      return $this;
    }

    /**
     * @return string
     */
    public function getPodDeliveryTypeCode()
    {
      return $this->PodDeliveryTypeCode;
    }

    /**
     * @param string $PodDeliveryTypeCode
     * @return \UkMail\Prod\Tracking\GetConsignmentDetailsPod
     */
    public function setPodDeliveryTypeCode($PodDeliveryTypeCode)
    {
      $this->PodDeliveryTypeCode = $PodDeliveryTypeCode;
      return $this;
    }

}
