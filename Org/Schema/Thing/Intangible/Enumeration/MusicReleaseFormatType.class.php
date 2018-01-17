<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class MusicReleaseFormatType.
 * Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicReleaseFormatType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/MusicReleaseFormatType
 * Date         12/03/2017
 */
class MusicReleaseFormatType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * CDFormat.
	 * @see     https://schema.org/CDFormat
	 * @var     string
	 */
	const CDFormat = "http://schema.org/CDFormat";

	/**
	 * CassetteFormat.
	 * @see     https://schema.org/CassetteFormat
	 * @var     string
	 */
	const CassetteFormat = "http://schema.org/CassetteFormat";

	/**
	 * DVDFormat.
	 * @see     https://schema.org/DVDFormat
	 * @var     string
	 */
	const DVDFormat = "http://schema.org/DVDFormat";

	/**
	 * DigitalAudioTapeFormat.
	 * @see     https://schema.org/DigitalAudioTapeFormat
	 * @var     string
	 */
	const DigitalAudioTapeFormat = "http://schema.org/DigitalAudioTapeFormat";

	/**
	 * DigitalFormat.
	 * @see     https://schema.org/DigitalFormat
	 * @var     string
	 */
	const DigitalFormat = "http://schema.org/DigitalFormat";

	/**
	 * LaserDiscFormat.
	 * @see     https://schema.org/LaserDiscFormat
	 * @var     string
	 */
	const LaserDiscFormat = "http://schema.org/LaserDiscFormat";

	/**
	 * VinylFormat.
	 * @see     https://schema.org/VinylFormat
	 * @var     string
	 */
	const VinylFormat = "http://schema.org/VinylFormat";

	/**
	 * MusicReleaseFormatType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicReleaseFormatType toString.
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
	 * MusicReleaseFormatType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>