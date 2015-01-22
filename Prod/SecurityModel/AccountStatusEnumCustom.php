<?php

namespace UkMail\Prod\SecurityModel;

class AccountStatusEnumCustom
{
    const __default = 'Closed';
    const Closed = 'Closed';
    const Active = 'Active';
    const ExemptFromStop = 'ExemptFromStop';
    const Under7DayReview = 'Under7DayReview';
    const FastTrack = 'FastTrack';
    const OnStop = 'OnStop';


}
