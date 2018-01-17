<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class GroceryStore
 * A grocery store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GroceryStore
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/GroceryStore
 * Date         09/04/2017
 */
class GroceryStore extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * GroceryStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GroceryStore toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * GroceryStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>