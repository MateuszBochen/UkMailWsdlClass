<?php

namespace UkMail\Prod\Tracking;

class ConsignmentNote
{

    /**
     * @var string $NoteBy
     */
    protected $NoteBy = null;

    /**
     * @var int $NoteSequence
     */
    protected $NoteSequence = null;

    /**
     * @var string $NoteText
     */
    protected $NoteText = null;

    /**
     * @var \DateTime $NoteTimeStamp
     */
    protected $NoteTimeStamp = null;

    /**
     * @param string $NoteBy
     * @param int $NoteSequence
     * @param string $NoteText
     * @param \DateTime $NoteTimeStamp
     */
    public function __construct($NoteBy = null, $NoteSequence = null, $NoteText = null, \DateTime $NoteTimeStamp = null)
    {
      $this->NoteBy = $NoteBy;
      $this->NoteSequence = $NoteSequence;
      $this->NoteText = $NoteText;
      $this->NoteTimeStamp = $NoteTimeStamp ? $NoteTimeStamp->format(\DateTime::ATOM) : null;
    }

    /**
     * @return string
     */
    public function getNoteBy()
    {
      return $this->NoteBy;
    }

    /**
     * @param string $NoteBy
     * @return \UkMail\Prod\Tracking\ConsignmentNote
     */
    public function setNoteBy($NoteBy)
    {
      $this->NoteBy = $NoteBy;
      return $this;
    }

    /**
     * @return int
     */
    public function getNoteSequence()
    {
      return $this->NoteSequence;
    }

    /**
     * @param int $NoteSequence
     * @return \UkMail\Prod\Tracking\ConsignmentNote
     */
    public function setNoteSequence($NoteSequence)
    {
      $this->NoteSequence = $NoteSequence;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoteText()
    {
      return $this->NoteText;
    }

    /**
     * @param string $NoteText
     * @return \UkMail\Prod\Tracking\ConsignmentNote
     */
    public function setNoteText($NoteText)
    {
      $this->NoteText = $NoteText;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNoteTimeStamp()
    {
      if ($this->NoteTimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NoteTimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NoteTimeStamp
     * @return \UkMail\Prod\Tracking\ConsignmentNote
     */
    public function setNoteTimeStamp(\DateTime $NoteTimeStamp)
    {
      $this->NoteTimeStamp = $NoteTimeStamp->format(\DateTime::ATOM);
      return $this;
    }

}
