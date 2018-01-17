<?php

namespace Org\Schema\Thing\CreativeWork\MusicPlaylist;

/**
 * Class MusicRelease.
 * A MusicRelease is a specific release of a music album.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicRelease
 * @namespace   Org\Schema\Thing\CreativeWork\MusicPlaylist
 * @package     Org\Schema
 * @see         https://schema.org/MusicRelease
 * Date         04/03/2017
 */
class MusicRelease extends \Org\Schema\Thing\CreativeWork\MusicPlaylist
{

	/**
	 * The catalog number for the release.
	 * @access  public
	 * @var     string
	 */
	public $catalogNumber;

	/**
	 * The group the release is credited to if different than the byArtist.
	 * For example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady Gaga.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $creditedTo;

	/**
	 * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $duration;

	/**
	 * Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\MusicReleaseFormatType
	 * @var     string
	 */
	public $musicReleaseFormat;

	/**
	 * The label that issued the release.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization
	 */
	public $recordLabel;

	/**
	 * The album this is a release of.
	 * Inverse property: albumRelease.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MusicPlaylist\MusicAlbum
	 */
	public $releaseOf;

	/**
	 * MusicRelease constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MusicPlaylist::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicRelease toString.
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
	 * MusicRelease destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MusicPlaylist::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>