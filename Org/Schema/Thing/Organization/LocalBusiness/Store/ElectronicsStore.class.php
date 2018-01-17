<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class ElectronicsStore
 * An electronics store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ElectronicsStore
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/ElectronicsStore
 * Date         09/04/2017
 */
class ElectronicsStore extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * ElectronicsStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ElectronicsStore toString.
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
	 * ElectronicsStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>