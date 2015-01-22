<?php

namespace UkMail\Prod\Despatching;

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
