<?php

namespace UkMail\Test\DespatchingDomesticConsignments;

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
