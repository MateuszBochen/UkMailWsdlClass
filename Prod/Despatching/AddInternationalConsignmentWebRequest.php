<?php

namespace UkMail\Prod\Despatching;

class AddInternationalConsignmentWebRequest extends AddConsignmentWebRequest
{

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var boolean $DocumentsOnly
     */
    protected $DocumentsOnly = null;

    /**
     * @var boolean $ExtendedCoverRequired
     */
    protected $ExtendedCoverRequired = null;

    /**
     * @var string $GoodsDescription1
     */
    protected $GoodsDescription1 = null;

    /**
     * @var string $GoodsDescription2
     */
    protected $GoodsDescription2 = null;

    /**
     * @var string $GoodsDescription3
     */
    protected $GoodsDescription3 = null;

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @var boolean $InFreeCirculationEU
     */
    protected $InFreeCirculationEU = null;

    /**
     * @var InvoiceTypeList $InvoiceType
     */
    protected $InvoiceType = null;

    /**
     * @var int $Length
     */
    protected $Length = null;

    /**
     * @var boolean $NoDangerousGoods
     */
    protected $NoDangerousGoods = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @var int $Width
     */
    protected $Width = null;

    /**
     * @param boolean $ConfirmationOfDelivery
     * @param int $Items
     * @param int $ServiceKey
     * @param float $Weight
     * @param boolean $DocumentsOnly
     * @param boolean $ExtendedCoverRequired
     * @param int $Height
     * @param boolean $InFreeCirculationEU
     * @param InvoiceTypeList $InvoiceType
     * @param int $Length
     * @param boolean $NoDangerousGoods
     * @param float $Value
     * @param int $Width
     */
    public function __construct($ConfirmationOfDelivery = null, $Items = null, $ServiceKey = null, $Weight = null, $DocumentsOnly = null, $ExtendedCoverRequired = null, $Height = null, $InFreeCirculationEU = null, $InvoiceType = null, $Length = null, $NoDangerousGoods = null, $Value = null, $Width = null)
    {
      parent::__construct($ConfirmationOfDelivery, $Items, $ServiceKey, $Weight);
      $this->DocumentsOnly = $DocumentsOnly;
      $this->ExtendedCoverRequired = $ExtendedCoverRequired;
      $this->Height = $Height;
      $this->InFreeCirculationEU = $InFreeCirculationEU;
      $this->InvoiceType = $InvoiceType;
      $this->Length = $Length;
      $this->NoDangerousGoods = $NoDangerousGoods;
      $this->Value = $Value;
      $this->Width = $Width;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDocumentsOnly()
    {
      return $this->DocumentsOnly;
    }

    /**
     * @param boolean $DocumentsOnly
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setDocumentsOnly($DocumentsOnly)
    {
      $this->DocumentsOnly = $DocumentsOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExtendedCoverRequired()
    {
      return $this->ExtendedCoverRequired;
    }

    /**
     * @param boolean $ExtendedCoverRequired
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setExtendedCoverRequired($ExtendedCoverRequired)
    {
      $this->ExtendedCoverRequired = $ExtendedCoverRequired;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsDescription1()
    {
      return $this->GoodsDescription1;
    }

    /**
     * @param string $GoodsDescription1
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setGoodsDescription1($GoodsDescription1)
    {
      $this->GoodsDescription1 = $GoodsDescription1;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsDescription2()
    {
      return $this->GoodsDescription2;
    }

    /**
     * @param string $GoodsDescription2
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setGoodsDescription2($GoodsDescription2)
    {
      $this->GoodsDescription2 = $GoodsDescription2;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsDescription3()
    {
      return $this->GoodsDescription3;
    }

    /**
     * @param string $GoodsDescription3
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setGoodsDescription3($GoodsDescription3)
    {
      $this->GoodsDescription3 = $GoodsDescription3;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInFreeCirculationEU()
    {
      return $this->InFreeCirculationEU;
    }

    /**
     * @param boolean $InFreeCirculationEU
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setInFreeCirculationEU($InFreeCirculationEU)
    {
      $this->InFreeCirculationEU = $InFreeCirculationEU;
      return $this;
    }

    /**
     * @return InvoiceTypeList
     */
    public function getInvoiceType()
    {
      return $this->InvoiceType;
    }

    /**
     * @param InvoiceTypeList $InvoiceType
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setInvoiceType($InvoiceType)
    {
      $this->InvoiceType = $InvoiceType;
      return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param int $Length
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNoDangerousGoods()
    {
      return $this->NoDangerousGoods;
    }

    /**
     * @param boolean $NoDangerousGoods
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setNoDangerousGoods($NoDangerousGoods)
    {
      $this->NoDangerousGoods = $NoDangerousGoods;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return \UkMail\Prod\Despatching\AddInternationalConsignmentWebRequest
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

}
