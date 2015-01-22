<?php

namespace UkMail\Prod\SecurityModel;

class ArrayOfAccountWebModelCustom
{

    /**
     * @var AccountWebModel[] $AccountWebModel
     */
    protected $AccountWebModel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountWebModel[]
     */
    public function getAccountWebModel()
    {
      return $this->AccountWebModel;
    }

    /**
     * @param AccountWebModel[] $AccountWebModel
     * @return \UkMail\Prod\SecurityModel\ArrayOfAccountWebModel
     */
    public function setAccountWebModel(array $AccountWebModel)
    {
      $this->AccountWebModel = $AccountWebModel;
      return $this;
    }

}
