<?php

namespace Org\Schema\Thing\Organization\EducationalOrganization;

/**
 * Class MiddleSchool
 * A middle school (typically for children aged around 11-14, although this varies somewhat).
 * @author      AppBels <app.bels@gmail.com>
 * @name        MiddleSchool
 * @namespace   Org\Schema\Thing\Organization\EducationalOrganization
 * @package     Org\Schema
 * @see         https://schema.org/MiddleSchool
 * Date         02/04/2017
 */
class MiddleSchool extends \Org\Schema\Thing\Organization\EducationalOrganization
{

	/**
	 * MiddleSchool constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MiddleSchool toString.
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
	 * MiddleSchool destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>