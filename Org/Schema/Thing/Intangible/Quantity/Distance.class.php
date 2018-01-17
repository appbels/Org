<?php

namespace Org\Schema\Thing\Intangible\Quantity;

/**
 * Class Distance
 * Properties that take Distances as values are of the form '<Number> <Length unit of measure>'. E.g., '7 ft'.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Distance
 * @namespace   Org\Schema\Thing\Intangible\Quantity
 * @package     Org\Schema
 * @see         https://schema.org/Distance
 * Date         30/03/2017
 */
class Distance extends \Org\Schema\Thing\Intangible\Quantity
{

	/**
	 * Distance constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Quantity::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Distance toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Quantity::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Distance destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Quantity::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>