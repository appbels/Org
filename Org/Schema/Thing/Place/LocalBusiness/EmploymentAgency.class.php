<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class EmploymentAgency
 * An employment agency.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EmploymentAgency
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/EmploymentAgency
 * Date         03/04/2017
 */
class EmploymentAgency extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * EmploymentAgency constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EmploymentAgency toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * EmploymentAgency destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>