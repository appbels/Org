<?php

namespace Org\Schema\Thing\CreativeWork\CreativeWorkSeason;

/**
 * Class RadioSeason.
 * Season dedicated to radio broadcast and associated online delivery.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RadioSeason
 * @namespace   Org\Schema\Thing\CreativeWork\CreativeWorkSeason
 * @package     Org\Schema
 * @see         https://schema.org/RadioSeason
 * Date         02/03/2017
 */
class RadioSeason extends \Org\Schema\Thing\CreativeWork\CreativeWorkSeason
{

	/**
	 * RadioSeason constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeason::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RadioSeason toString.
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
	 * RadioSeason destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeason::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>