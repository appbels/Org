<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class ClothingStore
 * A clothing store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ClothingStore
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/ClothingStore
 * Date         09/04/2017
 */
class ClothingStore extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * ClothingStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ClothingStore toString.
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
	 * ClothingStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>