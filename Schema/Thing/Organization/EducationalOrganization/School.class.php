<?php

namespace Org\Schema\Thing\Organization\EducationalOrganization;

/**
 * Class School
 * A school.
 * @author      AppBels <app.bels@gmail.com>
 * @name        School
 * @namespace   Org\Schema\Thing\Organization\EducationalOrganization
 * @package     Org\Schema
 * @see         https://schema.org/School
 * Date         02/04/2017
 */
class School extends \Org\Schema\Thing\Organization\EducationalOrganization
{

	/**
	 * School constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * School toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * School destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>