<?php

namespace UkMail\Prod\DespatchingDomesticConsignments;

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
