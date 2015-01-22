<?php

namespace UkMail\Test\Despatching;

class PacketAddressWebModel
{

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $Address3
     */
    protected $Address3 = null;

    /**
     * @var string $County
     */
    protected $County = null;

    /**
     * @var string $PostalTown
     */
    protected $PostalTown = null;

    /**
     * @var string $Postcode
     */
    protected $Postcode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \UkMail\Test\Despatching\PacketAddressWebModel
     */
    public function setAddress1($Address1)
    {
      $this->Address1 = $Address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \UkMail\Test\Despatching\PacketAddressWebModel
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress3()
    {
      return $this->Address3;
    }

    /**
     * @param string $Address3
     * @return \UkMail\Test\Despatching\PacketAddressWebModel
     */
    public function setAddress3($Address3)
    {
      $this->Address3 = $Address3;
      return $this;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
      return $this->County;
    }

    /**
     * @param string $County
     * @return \UkMail\Test\Despatching\PacketAddressWebModel
     */
    public function setCounty($County)
    {
      $this->County = $County;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalTown()
    {
      return $this->PostalTown;
    }

    /**
     * @param string $PostalTown
     * @return \UkMail\Test\Despatching\PacketAddressWebModel
     */
    public function setPostalTown($PostalTown)
    {
      $this->PostalTown = $PostalTown;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return \UkMail\Test\Despatching\PacketAddressWebModel
     */
    public function setPostcode($Postcode)
    {
      $this->Postcode = $Postcode;
      return $this;
    }

}
