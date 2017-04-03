<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class EmploymentAgency
 * An employment agency.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EmploymentAgency
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/EmploymentAgency
 * Date         03/04/2017
 */
class EmploymentAgency extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * EmploymentAgency constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EmploymentAgency toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__toString()
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
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>