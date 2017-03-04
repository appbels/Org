<?php

namespace Org\Schema\Thing\CreativeWork\MusicPlaylist;

/**
 * Class MusicAlbum.
 * A collection of music tracks.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicAlbum
 * @namespace   Org\Schema\Thing\CreativeWork\MusicPlaylist
 * @package     Org\Schema
 * @see         https://schema.org/MusicAlbum
 * Date         04/03/2017
 */
class MusicAlbum extends \Org\Schema\Thing\CreativeWork\MusicPlaylist
{

	/**
	 * Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\MusicAlbumProductionType
	 * @var     string
	 */
	public $albumProductionType;

	/**
	 * A release of this album.
	 * Inverse property: releaseOf.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MusicPlaylist\MusicRelease
	 */
	public $albumRelease;

	/**
	 * The kind of release which this album is: single, EP or album.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\MusicAlbumReleaseType
	 * @var     string
	 */
	public $albumReleaseType;

	/**
	 * The artist that performed this album or recording.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization\PerformingGroup\MusicGroup
	 */
	public $byArtist;

	/**
	 * MusicAlbum constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MusicPlaylist::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicAlbum toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MusicPlaylist::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MusicAlbum destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MusicPlaylist::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>