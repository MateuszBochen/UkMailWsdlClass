<?php

namespace UkMail\Prod\DespatchingDomesticConsignments;

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
