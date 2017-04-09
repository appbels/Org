<?php

namespace Org\Schema\Thing\Place\LocalBusiness\Store;

/**
 * Class JewelryStore
 * A jewelry store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        JewelryStore
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/JewelryStore
 * Date         09/04/2017
 */
class JewelryStore extends \Org\Schema\Thing\Place\LocalBusiness\Store
{

	/**
	 * JewelryStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * JewelryStore toString.
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
	 * JewelryStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>