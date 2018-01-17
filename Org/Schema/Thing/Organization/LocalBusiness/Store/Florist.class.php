<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class Florist
 * A florist.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Florist
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/Florist
 * Date         09/04/2017
 */
class Florist extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * Florist constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Florist toString.
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
	 * Florist destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>