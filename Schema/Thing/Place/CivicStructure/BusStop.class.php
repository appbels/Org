<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class BusStop
 * A bus stop.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BusStop
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/BusStop
 * Date         10/04/2017
 */
class BusStop extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * BusStop constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BusStop toString.
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
	 * BusStop destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>