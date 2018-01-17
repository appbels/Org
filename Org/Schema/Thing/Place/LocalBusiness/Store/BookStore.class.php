<?php

namespace Org\Schema\Thing\Place\LocalBusiness\Store;

/**
 * Class BookStore
 * A bookstore.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BookStore
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/BookStore
 * Date         09/04/2017
 */
class BookStore extends \Org\Schema\Thing\Place\LocalBusiness\Store
{

	/**
	 * BookStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BookStore toString.
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
	 * BookStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>