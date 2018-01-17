<?php

namespace Org\Schema\Thing\Product\Vehicle;

/**
 * Class Car
 * A car is a wheeled, self-powered motor vehicle used for transportation.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Car
 * @namespace   Org\Schema\Thing\Product\Vehicle
 * @package     Org\Schema
 * @see         https://schema.org/Car
 * Date         11/04/2017
 */
class Car extends \Org\Schema\Thing\Product\Vehicle
{

	/**
	 * Car constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product\Vehicle::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Car toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product\Vehicle::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Car destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product\Vehicle::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>