<?php

namespace UkMail\Test\Tracking;

class Error
{

    /**
     * @var ErrorType $ErrorType
     */
    protected $ErrorType = null;

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var string $ExceptionMessage
     */
    protected $ExceptionMessage = null;

    /**
     * @var string $FriendlyMessage
     */
    protected $FriendlyMessage = null;

    /**
     * @param ErrorType $ErrorType
     * @param string $ErrorCode
     * @param string $ExceptionMessage
     * @param string $FriendlyMessage
     */
    public function __construct($ErrorType = null, $ErrorCode = null, $ExceptionMessage = null, $FriendlyMessage = null)
    {
      $this->ErrorType = $ErrorType;
      $this->ErrorCode = $ErrorCode;
      $this->ExceptionMessage = $ExceptionMessage;
      $this->FriendlyMessage = $FriendlyMessage;
    }

    /**
     * @return ErrorType
     */
    public function getErrorType()
    {
      return $this->ErrorType;
    }

    /**
     * @param ErrorType $ErrorType
     * @return \UkMail\Test\Tracking\Error
     */
    public function setErrorType($ErrorType)
    {
      $this->ErrorType = $ErrorType;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \UkMail\Test\Tracking\Error
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionMessage()
    {
      return $this->ExceptionMessage;
    }

    /**
     * @param string $ExceptionMessage
     * @return \UkMail\Test\Tracking\Error
     */
    public function setExceptionMessage($ExceptionMessage)
    {
      $this->ExceptionMessage = $ExceptionMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getFriendlyMessage()
    {
      return $this->FriendlyMessage;
    }

    /**
     * @param string $FriendlyMessage
     * @return \UkMail\Test\Tracking\Error
     */
    public function setFriendlyMessage($FriendlyMessage)
    {
      $this->FriendlyMessage = $FriendlyMessage;
      return $this;
    }

}
