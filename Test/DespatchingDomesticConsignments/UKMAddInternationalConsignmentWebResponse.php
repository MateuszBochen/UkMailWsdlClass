<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

class UKMAddInternationalConsignmentWebResponse extends UKMWebResponse
{

    /**
     * @var string $ConsignmentNumber
     */
    protected $ConsignmentNumber = null;

    /**
     * @var base64Binary $InvoiceBytes
     */
    protected $InvoiceBytes = null;

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
     * @return \UkMail\Test\DespatchingDomesticConsignments\UKMAddInternationalConsignmentWebResponse
     */
    public function setConsignmentNumber($ConsignmentNumber)
    {
      $this->ConsignmentNumber = $ConsignmentNumber;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getInvoiceBytes()
    {
      return $this->InvoiceBytes;
    }

    /**
     * @param base64Binary $InvoiceBytes
     * @return \UkMail\Test\DespatchingDomesticConsignments\UKMAddInternationalConsignmentWebResponse
     */
    public function setInvoiceBytes($InvoiceBytes)
    {
      $this->InvoiceBytes = $InvoiceBytes;
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
     * @return \UkMail\Test\DespatchingDomesticConsignments\UKMAddInternationalConsignmentWebResponse
     */
    public function setLabels($Labels)
    {
      $this->Labels = $Labels;
      return $this;
    }

}
