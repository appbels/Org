<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class AutoPartsStore
 * An auto parts store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AutoPartsStore
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/AutoPartsStore
 * Date         02/04/2017
 */
class AutoPartsStore extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * AutoPartsStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AutoPartsStore toString.
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
	 * AutoPartsStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>