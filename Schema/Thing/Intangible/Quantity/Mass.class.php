<?php

namespace Org\Schema\Thing\Intangible\Quantity;

/**
 * Class Mass
 * Properties that take Mass as values are of the form '<Number> <Mass unit of measure>'. E.g., '7 kg'.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Mass
 * @namespace   Org\Schema\Thing\Intangible\Quantity
 * @package     Org\Schema
 * @see         https://schema.org/Mass
 * Date         30/03/2017
 */
class Mass extends \Org\Schema\Thing\Intangible\Quantity
{

	/**
	 * Mass constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Quantity::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Mass toString.
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
	 * Mass destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Quantity::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>