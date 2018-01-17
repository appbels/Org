<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class ShoppingCenter
 * A shopping center or mall.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ShoppingCenter
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/ShoppingCenter
 * Date         09/04/2017
 */
class ShoppingCenter extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * ShoppingCenter constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ShoppingCenter toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ShoppingCenter destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>