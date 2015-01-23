<?php

namespace UkMail\Test\BookCollection;

class UKMAddCollectionWebResponse extends UKMWebResponse
{

    /**
     * @var string $BookingMessage
     */
    protected $BookingMessage = null;

    /**
     * @var string $CollectionJobNumber
     */
    protected $CollectionJobNumber = null;

    /**
     * @param UKMResultState $Result
     */
    public function __construct($Result = null)
    {
      parent::__construct($Result);
    }

    /**
     * @return string
     */
    public function getBookingMessage()
    {
      return $this->BookingMessage;
    }

    /**
     * @param string $BookingMessage
     * @return \UkMail\Test\BookCollection\UKMAddCollectionWebResponse
     */
    public function setBookingMessage($BookingMessage)
    {
      $this->BookingMessage = $BookingMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectionJobNumber()
    {
      return $this->CollectionJobNumber;
    }

    /**
     * @param string $CollectionJobNumber
     * @return \UkMail\Test\BookCollection\UKMAddCollectionWebResponse
     */
    public function setCollectionJobNumber($CollectionJobNumber)
    {
      $this->CollectionJobNumber = $CollectionJobNumber;
      return $this;
    }

}
