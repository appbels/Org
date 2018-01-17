<?php

namespace Org\Schema\Thing\Organization\EducationalOrganization;

/**
 * Class ElementarySchool
 * An elementary school.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ElementarySchool
 * @namespace   Org\Schema\Thing\Organization\EducationalOrganization
 * @package     Org\Schema
 * @see         https://schema.org/ElementarySchool
 * Date         02/04/2017
 */
class ElementarySchool extends \Org\Schema\Thing\Organization\EducationalOrganization
{

	/**
	 * ElementarySchool constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ElementarySchool toString.
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
	 * ElementarySchool destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>