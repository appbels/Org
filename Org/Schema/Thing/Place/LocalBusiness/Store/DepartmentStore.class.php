<?php

namespace Org\Schema\Thing\Place\LocalBusiness\Store;

/**
 * Class DepartmentStore
 * A department store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DepartmentStore
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/DepartmentStore
 * Date         09/04/2017
 */
class DepartmentStore extends \Org\Schema\Thing\Place\LocalBusiness\Store
{

	/**
	 * DepartmentStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DepartmentStore toString.
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
	 * DepartmentStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>