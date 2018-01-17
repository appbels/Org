<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class HardwareStore
 * A hardware store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        HardwareStore
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/HardwareStore
 * Date         09/04/2017
 */
class HardwareStore extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * HardwareStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * HardwareStore toString.
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
	 * HardwareStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>