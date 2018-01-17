<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class MusicRecording.
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicRecording
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/MusicRecording
 * Date         04/03/2017
 */
class MusicRecording extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The artist that performed this album or recording.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization\PerformingGroup\MusicGroup
	 */
	public $byArtist;

	/**
	 * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $duration;

	/**
	 * The album to which this recording belongs.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MusicPlaylist\MusicAlbum
	 */
	public $inAlbum;

	/**
	 * The playlist to which this recording belongs.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MusicPlaylist
	 */
	public $inPlaylist;

	/**
	 * The International Standard Recording Code for the recording.
	 * @access  public
	 * @var     string
	 */
	public $isrcCode;

	/**
	 * The composition this track is a recording of.
	 * Inverse property: recordedAs.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MusicComposition
	 */
	public $recordingOf;

	/**
	 * MusicRecording constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicRecording toString.
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
	 * MusicRecording destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>