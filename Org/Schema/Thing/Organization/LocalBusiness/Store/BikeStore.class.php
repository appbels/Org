<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class BikeStore
 * A bike store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BikeStore
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/BikeStore
 * Date         09/04/2017
 */
class BikeStore extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * BikeStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BikeStore toString.
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
	 * BikeStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>