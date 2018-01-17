<?php

namespace Org\Schema\Thing\Organization\EducationalOrganization;

/**
 * Class HighSchool
 * A high school.
 * @author      AppBels <app.bels@gmail.com>
 * @name        HighSchool
 * @namespace   Org\Schema\Thing\Organization\EducationalOrganization
 * @package     Org\Schema
 * @see         https://schema.org/HighSchool
 * Date         02/04/2017
 */
class HighSchool extends \Org\Schema\Thing\Organization\EducationalOrganization
{

	/**
	 * HighSchool constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * HighSchool toString.
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
	 * HighSchool destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>