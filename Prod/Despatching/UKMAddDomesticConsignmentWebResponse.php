<?php

namespace UkMail\Prod\Despatching;

class UKMAddDomesticConsignmentWebResponse extends UKMWebResponse
{

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    /**
     * @var ArrayOfbase64Binary $Labels
     */
    protected $Labels = null;

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
    public function getConsignmentNumber()
    {
      return $this->ConsignmentNumber;
    }

    /**
     * @param string $ConsignmentNumber
     * @return \UkMail\Prod\Despatching\UKMAddDomesticConsignmentWebResponse
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

    /**
     * @return ArrayOfbase64Binary
     */
    public function getLabels()
    {
      return $this->Labels;
    }

    /**
     * @param ArrayOfbase64Binary $Labels
     * @return \UkMail\Prod\Despatching\UKMAddDomesticConsignmentWebResponse
     */
    public function setLabels($Labels)
    {
      $this->Labels = $Labels;
      return $this;
    }

}
