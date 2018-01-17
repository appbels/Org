<?php

namespace Org\Schema\Thing\Place\LocalBusiness\Store;

/**
 * Class MovieRentalStore
 * A movie rental store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MovieRentalStore
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/MovieRentalStore
 * Date         09/04/2017
 */
class MovieRentalStore extends \Org\Schema\Thing\Place\LocalBusiness\Store
{

	/**
	 * MovieRentalStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MovieRentalStore toString.
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
	 * MovieRentalStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>