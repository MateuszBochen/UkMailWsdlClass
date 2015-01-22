<?php

namespace UkMail\Prod\SecurityModel;

class UKMLogoutResponseCustom extends UKMWebResponseCustom
{

    /**
     * @param UKMResultState $Result
     */
    public function __construct($Result = null)
    {
      parent::__construct($Result);
    }

}
