<?php

namespace Org\Schema\Thing\Organization;

/**
 * Class NGO
 * Organization: Non-governmental Organization.
 * @author      AppBels <app.bels@gmail.com>
 * @name        NGO
 * @namespace   Org\Schema\Thing\Organization
 * @package     Org\Schema
 * @see         https://schema.org/NGO
 * Date         09/04/2017
 */
class NGO extends \Org\Schema\Thing\Organization
{

	/**
	 * NGO constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * NGO toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * NGO destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>