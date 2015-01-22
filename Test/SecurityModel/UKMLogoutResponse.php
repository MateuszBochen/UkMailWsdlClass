<?php

namespace UkMail\Test\SecurityModel;

class UKMLogoutResponse extends UKMWebResponse
{

    /**
     * @param UKMResultState $Result
     */
    public function __construct($Result = null)
    {
      parent::__construct($Result);
    }

}
