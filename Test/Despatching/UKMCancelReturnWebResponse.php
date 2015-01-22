<?php

namespace UkMail\Test\Despatching;

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
