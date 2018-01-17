<?php

namespace Org\Schema\Thing\Organization\MedicalOrganization;

/**
 * Class Pharmacy
 * A pharmacy or drugstore.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Pharmacy
 * @namespace   Org\Schema\Thing\Organization\MedicalOrganization
 * @package     Org\Schema
 * @see         https://schema.org/Pharmacy
 * Date         09/04/2017
 */
class Pharmacy extends \Org\Schema\Thing\Organization\MedicalOrganization
{

	/**
	 * Pharmacy constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\MedicalOrganization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Pharmacy toString.
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
	 * Pharmacy destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\MedicalOrganization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>