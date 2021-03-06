<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class BusStation
 * A bus station.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BusStation
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/BusStation
 * Date         10/04/2017
 */
class BusStation extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * BusStation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BusStation toString.
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
	 * BusStation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>