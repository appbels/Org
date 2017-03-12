<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class MusicAlbumReleaseType.
 * The kind of release which this album is: single, EP or album.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicAlbumReleaseType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/MusicAlbumReleaseType
 * Date         12/03/2017
 */
class MusicAlbumReleaseType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * AlbumRelease.
	 * @see     https://schema.org/AlbumRelease
	 * @var     string
	 */
	const AlbumRelease = "https://schema.org/AlbumRelease";

	/**
	 * BroadcastRelease.
	 * @see     https://schema.org/BroadcastRelease
	 * @var     string
	 */
	const BroadcastRelease = "https://schema.org/BroadcastRelease";

	/**
	 * EPRelease.
	 * @see     https://schema.org/EPRelease
	 * @var     string
	 */
	const EPRelease = "https://schema.org/EPRelease";

	/**
	 * SingleRelease.
	 * @see     https://schema.org/SingleRelease
	 * @var     string
	 */
	const SingleRelease = "https://schema.org/SingleRelease";

	/**
	 * MusicAlbumReleaseType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicAlbumReleaseType toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MusicAlbumReleaseType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>