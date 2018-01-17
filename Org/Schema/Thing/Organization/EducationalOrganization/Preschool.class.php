<?php

namespace Org\Schema\Thing\Organization\EducationalOrganization;

/**
 * Class Preschool
 * A preschool.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Preschool
 * @namespace   Org\Schema\Thing\Organization\EducationalOrganization
 * @package     Org\Schema
 * @see         https://schema.org/Preschool
 * Date         02/04/2017
 */
class Preschool extends \Org\Schema\Thing\Organization\EducationalOrganization
{

	/**
	 * Preschool constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Preschool toString.
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
	 * Preschool destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\EducationalOrganization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>