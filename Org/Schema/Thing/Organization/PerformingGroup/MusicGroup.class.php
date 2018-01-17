<?php

namespace Org\Schema\Thing\Organization\PerformingGroup;

/**
 * Class MusicGroup
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicGroup
 * @namespace   Org\Schema\Thing\Organization\PerformingGroup
 * @package     Org\Schema
 * @see         https://schema.org/MusicGroup
 * Date         09/04/2017
 */
class MusicGroup extends \Org\Schema\Thing\Organization\PerformingGroup
{

	/**
	 * A music album.
	 * Supersedes albums.
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\MusicPlaylist\MusicAlbum
	 */
	public $album;

	/**
	 * Genre of the creative work or group.
	 * @access  public
	 * @var     string
	 */
	public $genre;

	/**
	 * A music recording (track)—usually a single song.
	 * If an ItemList is given, the list should contain items of type MusicRecording.
	 * Supersedes tracks.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\ItemList|\Org\Schema\Thing\CreativeWork\MusicRecording
	 */
	public $track;

	/**
	 * MusicGroup constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\PerformingGroup::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicGroup toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\PerformingGroup::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MusicGroup destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\PerformingGroup::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>