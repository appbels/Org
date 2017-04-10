<?php

namespace Org\Schema\Thing\Place;

/**
 * Class LandmarksOrHistoricalBuildings
 * An historical landmark or building.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LandmarksOrHistoricalBuildings
 * @namespace   Org\Schema\Thing\Place
 * @package     Org\Schema
 * @see         https://schema.org/LandmarksOrHistoricalBuildings
 * Date         10/04/2017
 */
class LandmarksOrHistoricalBuildings extends \Org\Schema\Thing\Place
{

	/**
	 * LandmarksOrHistoricalBuildings constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LandmarksOrHistoricalBuildings toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * LandmarksOrHistoricalBuildings destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>