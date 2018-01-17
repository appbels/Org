<?php

namespace Org\Schema\Thing\Place\LocalBusiness\Store;

/**
 * Class FurnitureStore
 * A furniture store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        FurnitureStore
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/FurnitureStore
 * Date         09/04/2017
 */
class FurnitureStore extends \Org\Schema\Thing\Place\LocalBusiness\Store
{

	/**
	 * FurnitureStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * FurnitureStore toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * FurnitureStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>