<?php

namespace Org\Schema\Thing\Organization;

/**
 * Class EducationalOrganization
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        EducationalOrganization
 * @namespace   Org\Schema\Thing\Organization
 * @package     Org\Schema
 * @see         https://schema.org/EducationalOrganization
 * Date         02/04/2017
 */
class EducationalOrganization extends \Org\Schema\Thing\Organization
{

	/**
	 * Alumni of an organization.
	 * Inverse property: alumniOf.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $alumni;

	/**
	 * EducationalOrganization constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EducationalOrganization toString.
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
	 * EducationalOrganization destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>