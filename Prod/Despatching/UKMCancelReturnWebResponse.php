<?php

namespace UkMail\Prod\Despatching;

class UKMCancelReturnWebResponse extends UKMWebResponse
{

    /**
     * @param UKMResultState $Result
     */
    public function __construct($Result = null)
    {
      parent::__construct($Result);
    }

}
