<?php

namespace Org\Schema\Thing\Organization;

/**
 * Class GovernmentOrganization
 * A governmental organization or agency.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GovernmentOrganization
 * @namespace   Org\Schema\Thing\Organization
 * @package     Org\Schema
 * @see         https://schema.org/GovernmentOrganization
 * Date         02/04/2017
 */
class GovernmentOrganization extends \Org\Schema\Thing\Organization
{

	/**
	 * GovernmentOrganization constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GovernmentOrganization toString.
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
	 * GovernmentOrganization destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>