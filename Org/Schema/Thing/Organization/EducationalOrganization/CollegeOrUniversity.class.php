<?php

namespace Org\Schema\Thing\Organization\EducationalOrganization;

/**
 * Class CollegeOrUniversity
 * A college, university, or other third-level educational institution.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CollegeOrUniversity
 * @namespace   Org\Schema\Thing\Organization\EducationalOrganization
 * @package     Org\Schema
 * @see         https://schema.org/CollegeOrUniversity
 * Date         02/04/2017
 */
class CollegeOrUniversity extends \Org\Schema\Thing\Organization\EducationalOrganization
{

	/**
	 * CollegeOrUniversity constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CollegeOrUniversity toString.
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
	 * CollegeOrUniversity destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>