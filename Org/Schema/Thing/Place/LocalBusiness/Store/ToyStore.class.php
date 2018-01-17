<?php

namespace Org\Schema\Thing\Place\LocalBusiness\Store;

/**
 * Class ToyStore
 * A toy store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ToyStore
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/ToyStore
 * Date         09/04/2017
 */
class ToyStore extends \Org\Schema\Thing\Place\LocalBusiness\Store
{

	/**
	 * ToyStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ToyStore toString.
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
	 * ToyStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>