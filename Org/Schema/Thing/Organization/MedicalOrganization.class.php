<?php

namespace Org\Schema\Thing\Organization;

/**
 * Class MedicalOrganization
 * A medical organization (physical or not), such as hospital, institution or clinic.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MedicalOrganization
 * @namespace   Org\Schema\Thing\Organization
 * @package     Org\Schema
 * @see         https://schema.org/MedicalOrganization
 * Date         03/04/2017
 */
class MedicalOrganization extends \Org\Schema\Thing\Organization
{

	/**
	 * MedicalOrganization constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MedicalOrganization toString.
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
	 * MedicalOrganization destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>