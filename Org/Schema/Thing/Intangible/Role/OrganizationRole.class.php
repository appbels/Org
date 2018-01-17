<?php

namespace Org\Schema\Thing\Intangible\Role;

/**
 * Class OrganizationRole
 * A subclass of Role used to describe roles within organizations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        OrganizationRole
 * @namespace   Org\Schema\Thing\Intangible\Role
 * @package     Org\Schema
 * @see         https://schema.org/OrganizationRole
 * Date         02/04/2017
 */
class OrganizationRole extends \Org\Schema\Thing\Intangible\Role
{

	/**
	 * A number associated with a role in an organization, for example, the number on an athlete's jersey.
	 * @access	public
	 * @var		int
	 */
	public $numberedPosition;

	/**
	 * OrganizationRole constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Role::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * OrganizationRole toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Role::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * OrganizationRole destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Role::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>