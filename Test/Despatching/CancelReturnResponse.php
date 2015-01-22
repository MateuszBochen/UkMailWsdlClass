<?php

namespace UkMail\Test\Despatching;

class CancelReturnResponse
{

    /**
     * @var UKMCancelReturnWebResponse $CancelReturnResult
     */
    protected $CancelReturnResult = null;

    /**
     * @param UKMCancelReturnWebResponse $CancelReturnResult
     */
    public function __construct($CancelReturnResult = null)
    {
      $this->CancelReturnResult = $CancelReturnResult;
    }

    /**
     * @return UKMCancelReturnWebResponse
     */
    public function getCancelReturnResult()
    {
      return $this->CancelReturnResult;
    }

    /**
     * @param UKMCancelReturnWebResponse $CancelReturnResult
     * @return \UkMail\Test\Despatching\CancelReturnResponse
     */
    public function setCancelReturnResult($CancelReturnResult)
    {
      $this->CancelReturnResult = $CancelReturnResult;
      return $this;
    }

}
