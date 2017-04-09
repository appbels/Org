<?php

namespace Org\Schema\Thing\Organization\MedicalOrganization;

/**
 * Class Physician
 * A doctor's office.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Physician
 * @namespace   Org\Schema\Thing\Organization\MedicalOrganization
 * @package     Org\Schema
 * @see         https://schema.org/Physician
 * Date         09/04/2017
 */
class Physician extends \Org\Schema\Thing\Organization\MedicalOrganization
{

	/**
	 * Physician constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\MedicalOrganization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Physician toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\MedicalOrganization::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Physician destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\MedicalOrganization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>