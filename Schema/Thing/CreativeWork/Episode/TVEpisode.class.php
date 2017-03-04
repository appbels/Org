<?php

namespace Org\Schema\Thing\CreativeWork\Episode;

/**
 * Class TVEpisode.
 * A TV episode which can be part of a series or season.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TVEpisode
 * @namespace   Org\Schema\Thing\CreativeWork\Episode
 * @package     Org\Schema
 * @see         https://schema.org/TVEpisode
 * Date         04/03/2017
 */
class TVEpisode extends \Org\Schema\Thing\CreativeWork\Episode
{

	/**
	 * The country of the principal offices of the production company or individual
	 * responsible for the movie or program.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place\AdministrativeArea\Country
	 */
	public $countryOfOrigin;

	/**
	 * Languages in which subtitles/captions are available, in IETF BCP 47 standard format.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\Language
	 */
	public $subtitleLanguage;

	/**
	 * TVEpisode constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Episode::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TVEpisode toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Episode::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * TVEpisode destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Episode::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>