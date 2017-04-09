<?php

namespace Org\Schema\Thing\Place\LocalBusiness\Store;

/**
 * Class ShoeStore
 * A shoe store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ShoeStore
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/ShoeStore
 * Date         09/04/2017
 */
class ShoeStore extends \Org\Schema\Thing\Place\LocalBusiness\Store
{

	/**
	 * ShoeStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ShoeStore toString.
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
	 * ShoeStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>