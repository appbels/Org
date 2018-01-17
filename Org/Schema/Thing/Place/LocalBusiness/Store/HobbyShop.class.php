<?php

namespace Org\Schema\Thing\Place\LocalBusiness\Store;

/**
 * Class HobbyShop
 * A store that sells materials useful or necessary for various hobbies.
 * @author      AppBels <app.bels@gmail.com>
 * @name        HobbyShop
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/HobbyShop
 * Date         09/04/2017
 */
class HobbyShop extends \Org\Schema\Thing\Place\LocalBusiness\Store
{

	/**
	 * HobbyShop constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * HobbyShop toString.
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
	 * HobbyShop destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>