<?php

namespace Org\Schema\Thing\Intangible\Quantity;

/**
 * Class Energy
 * Properties that take Energy as values are of the form '<Number> <Energy unit of measure>'.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Energy
 * @namespace   Org\Schema\Thing\Intangible\Quantity
 * @package     Org\Schema
 * @see         https://schema.org/Energy
 * Date         30/03/2017
 */
class Energy extends \Org\Schema\Thing\Intangible\Quantity
{

	/**
	 * Energy constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Quantity::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Energy toString.
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
	 * Energy destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Quantity::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>