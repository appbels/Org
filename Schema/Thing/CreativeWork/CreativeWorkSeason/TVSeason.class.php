<?php

namespace Org\Schema\Thing\CreativeWork\CreativeWorkSeason;

/**
 * Class TVSeason.
 * Season dedicated to TV broadcast and associated online delivery.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TVSeason
 * @namespace   Org\Schema\Thing\CreativeWork\CreativeWorkSeason
 * @package     Org\Schema
 * @see         https://schema.org/TVSeason
 * Date         02/03/2017
 */
class TVSeason extends \Org\Schema\Thing\CreativeWork\CreativeWorkSeason
{

	/**
	 * The country of the principal offices of the production company or individual
	 * responsible for the movie or program.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place\AdministrativeArea\Country
	 */
	public $countryOfOrigin;

	/**
	 * TVSeason constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeason::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TVSeason toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeason::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * TVSeason destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeason::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>