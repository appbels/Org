<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class Store
 * A retail good store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Store
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/Store
 * Date         09/04/2017
 */
class Store extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * Store constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Store toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Store destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>