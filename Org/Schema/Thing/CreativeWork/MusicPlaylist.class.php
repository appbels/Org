<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class MusicPlaylist.
 * A collection of music tracks in playlist form.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicPlaylist
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/MusicPlaylist
 * Date         04/03/2017
 */
class MusicPlaylist extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The number of tracks in this album or playlist.
	 * @access  public
	 * @var     int
	 */
	public $numTracks;

	/**
	 * A music recording (track)—usually a single song.
	 * If an ItemList is given, the list should contain items of type MusicRecording.
	 * Supersedes tracks.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\ItemList|\Org\Schema\Thing\CreativeWork\MusicRecording
	 */
	public $track;

	/**
	 * MusicPlaylist constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicPlaylist toString.
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
	 * MusicPlaylist destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>