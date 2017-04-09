<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class OutletStore
 * An outlet store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        OutletStore
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/OutletStore
 * Date         09/04/2017
 */
class OutletStore extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * OutletStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * OutletStore toString.
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
	 * OutletStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>