<?php

namespace Org\Schema\Thing\Intangible\Quantity;

/**
 * Class Duration
 * Quantity: Duration (use ISO 8601 duration format).
 * @author      AppBels <app.bels@gmail.com>
 * @name        Duration
 * @namespace   Org\Schema\Thing\Intangible\Quantity
 * @package     Org\Schema
 * @see         https://schema.org/Duration
 * Date         30/03/2017
 */
class Duration extends \Org\Schema\Thing\Intangible\Quantity
{

	/**
	 * Duration constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Quantity::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Duration toString.
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
	 * Duration destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Quantity::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>