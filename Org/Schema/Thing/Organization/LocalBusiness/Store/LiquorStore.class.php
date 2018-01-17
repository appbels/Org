<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class LiquorStore
 * A shop that sells alcoholic drinks such as wine, beer, whisky and other spirits.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LiquorStore
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/LiquorStore
 * Date         09/04/2017
 */
class LiquorStore extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * LiquorStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LiquorStore toString.
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
	 * LiquorStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>