<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class SubwayStation
 * A subway station.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SubwayStation
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/SubwayStation
 * Date         10/04/2017
 */
class SubwayStation extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * SubwayStation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SubwayStation toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SubwayStation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>