<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class MusicComposition.
 * A musical composition.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicComposition
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/MusicComposition
 * Date         04/03/2017
 */
class MusicComposition extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The person or organization who wrote a composition, or who is the composer of a
	 * work performed at some event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $composer;

	/**
	 * The date and place the work was first performed.
	 * @access  public
	 * @var     \Org\Schema\Thing\Event
	 */
	public $firstPerformance;

	/**
	 * Smaller compositions included in this work (e.g. a movement in a symphony).
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MusicComposition
	 */
	public $includedComposition;

	/**
	 * The International Standard Musical Work Code for the composition.
	 * @access  public
	 * @var     string
	 */
	public $iswcCode;

	/**
	 * The person who wrote the words.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $lyricist;

	/**
	 * The words in the song.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $lyrics;

	/**
	 * An arrangement derived from the composition.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MusicComposition
	 */
	public $musicArrangement;

	/**
	 * The type of composition (e.g. overture, sonata, symphony, etc.).
	 * @access  public
	 * @var     string
	 */
	public $musicCompositionForm;

	/**
	 * The key, mode, or scale this composition uses.
	 * @access  public
	 * @var     string
	 */
	public $musicalKey;

	/**
	 * An audio recording of the work.
	 * Inverse property: recordingOf.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MusicRecording
	 */
	public $recordedAs;

	/**
	 * MusicComposition constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicComposition toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MusicComposition destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>