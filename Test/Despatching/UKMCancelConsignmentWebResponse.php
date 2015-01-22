<?php

namespace UkMail\Test\Despatching;

class UKMCancelConsignmentWebResponse extends UKMWebResponse
{

    /**
     * @param UKMResultState $Result
     */
    public function __construct($Result = null)
    {
      parent::__construct($Result);
    }

}
