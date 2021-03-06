<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class MusicAlbumProductionType.
 * Classification of the album by it's type of content: soundtrack, live album, studio album, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicAlbumProductionType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/MusicAlbumProductionType
 * Date         12/03/2017
 */
class MusicAlbumProductionType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * CompilationAlbum.
	 * @see     https://schema.org/CompilationAlbum
	 * @var     string
	 */
	const CompilationAlbum = "http://schema.org/CompilationAlbum";

	/**
	 * DJMixAlbum.
	 * @see     https://schema.org/DJMixAlbum
	 * @var     string
	 */
	const DJMixAlbum = "http://schema.org/DJMixAlbum";

	/**
	 * DemoAlbum.
	 * @see     https://schema.org/DemoAlbum
	 * @var     string
	 */
	const DemoAlbum = "http://schema.org/DemoAlbum";

	/**
	 * LiveAlbum.
	 * @see     https://schema.org/LiveAlbum
	 * @var     string
	 */
	const LiveAlbum = "http://schema.org/LiveAlbum";

	/**
	 * MixtapeAlbum.
	 * @see     https://schema.org/MixtapeAlbum
	 * @var     string
	 */
	const MixtapeAlbum = "http://schema.org/MixtapeAlbum";

	/**
	 * RemixAlbum.
	 * @see     https://schema.org/RemixAlbum
	 * @var     string
	 */
	const RemixAlbum = "http://schema.org/RemixAlbum";

	/**
	 * SoundtrackAlbum.
	 * @see     https://schema.org/SoundtrackAlbum
	 * @var     string
	 */
	const SoundtrackAlbum = "http://schema.org/SoundtrackAlbum";

	/**
	 * SpokenWordAlbum.
	 * @see     https://schema.org/SpokenWordAlbum
	 * @var     string
	 */
	const SpokenWordAlbum = "http://schema.org/SpokenWordAlbum";

	/**
	 * StudioAlbum.
	 * @see     https://schema.org/StudioAlbum
	 * @var     string
	 */
	const StudioAlbum = "http://schema.org/StudioAlbum";

	/**
	 * MusicAlbumProductionType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicAlbumProductionType toString.
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
	 * MusicAlbumProductionType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>