<?php

namespace UkMail\Prod\Tracking;

class ArrayOfGetFullConsignmentDetailsPodV2
{

    /**
     * @var GetFullConsignmentDetailsPodV2[] $GetFullConsignmentDetailsPodV2
     */
    protected $GetFullConsignmentDetailsPodV2 = null;

    /**
     * @param GetFullConsignmentDetailsPodV2[] $GetFullConsignmentDetailsPodV2
     */
    public function __construct(array $GetFullConsignmentDetailsPodV2 = null)
    {
      $this->GetFullConsignmentDetailsPodV2 = $GetFullConsignmentDetailsPodV2;
    }

    /**
     * @return GetFullConsignmentDetailsPodV2[]
     */
    public function getGetFullConsignmentDetailsPodV2()
    {
      return $this->GetFullConsignmentDetailsPodV2;
    }

    /**
     * @param GetFullConsignmentDetailsPodV2[] $GetFullConsignmentDetailsPodV2
     * @return \UkMail\Prod\Tracking\ArrayOfGetFullConsignmentDetailsPodV2
     */
    public function setGetFullConsignmentDetailsPodV2(array $GetFullConsignmentDetailsPodV2)
    {
      $this->GetFullConsignmentDetailsPodV2 = $GetFullConsignmentDetailsPodV2;
      return $this;
    }

}
