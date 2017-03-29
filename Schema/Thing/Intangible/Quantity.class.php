<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Quantity
 * Quantities such as distance, time, mass, weight, etc. Particular
 * instances of say Mass are entities like '3 Kg' or '4 milligrams'.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Quantity
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Quantity
 * Date         30/03/2017
 */
class Quantity extends \Org\Schema\Thing\Intangible
{

	/**
	 * Quantity constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Quantity toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Quantity destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>