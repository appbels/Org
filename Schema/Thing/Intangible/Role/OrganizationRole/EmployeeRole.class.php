<?php

namespace Org\Schema\Thing\Intangible\Role\OrganizationRole;

/**
 * Class EmployeeRole
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        EmployeeRole
 * @namespace   Org\Schema\Thing\Intangible\Role\OrganizationRole
 * @package     Org\Schema
 * @see         https://schema.org/EmployeeRole
 * Date         02/04/2017
 */
class EmployeeRole extends \Org\Schema\Thing\Intangible\Role\OrganizationRole
{

	/**
	 * The base salary of the job or of an employee in an EmployeeRole.
	 * @access  public
	 * @var     int|\Org\Schema\Thing\Intangible\StructuredValue\MonetaryAmount|\Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
	 */
	public $baseSalary;

	/**
	 * The currency (coded using ISO 4217 ) used for the main salary information in this job posting or for this employee.
	 * @access	public
	 * @var		string
	 */
	public $salaryCurrency;

	/**
	 * EmployeeRole constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Role\OrganizationRole::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EmployeeRole toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Role\OrganizationRole::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * EmployeeRole destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Role\OrganizationRole::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>