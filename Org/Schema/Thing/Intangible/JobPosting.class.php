<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class JobPosting.
 * A listing that describes a job opening in a certain organization.
 * @author      AppBels <app.bels@gmail.com>
 * @name        JobPosting
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/JobPosting
 * Date         21/03/2017
 */
class JobPosting extends \Org\Schema\Thing\Intangible
{

	/**
	 * The base salary of the job or of an employee in an EmployeeRole.
	 * @access  public
	 * @var     int|\Org\Schema\Thing\Intangible\StructuredValue\MonetaryAmount|\Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
	 */
	public $baseSalary;

	/**
	 * Publication date for the job posting.
	 * @access  public
	 * @var     string
	 */
	public $datePosted;

	/**
	 * Educational background needed for the position.
	 * @access  public
	 * @var     string
	 */
	public $educationRequirements;

	/**
	 * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
	 * @access  public
	 * @var     string
	 */
	public $employmentType;

	/**
	 * Description of skills and experience needed for the position.
	 * @access  public
	 * @var     string
	 */
	public $experienceRequirements;

	/**
	 * Organization offering the job position.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization
	 */
	public $hiringOrganization;

	/**
	 * Description of bonus and commission compensation aspects of the job.
	 * Supersedes incentives.
	 * @access  public
	 * @var     string
	 */
	public $incentiveCompensation;

	/**
	 * The industry associated with the job position.
	 * @access  public
	 * @var     string
	 */
	public $industry;

	/**
	 * Description of benefits associated with the job. Supersedes benefits.
	 * @access  public
	 * @var     string
	 */
	public $jobBenefits;

	/**
	 * A (typically single) geographic location associated with the job position.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place
	 */
	public $jobLocation;

	/**
	 * Category or categories describing the job.
	 * Use BLS O*NET-SOC taxonomy: http://www.onetcenter.org/taxonomy.html.
	 * Ideally includes textual label and formal code, with the property repeated for each applicable value.
	 * @access  public
	 * @var     string
	 */
	public $occupationalCategory;

	/**
	 * Specific qualifications required for this role.
	 * @access  public
	 * @var     string
	 */
	public $qualifications;

	/**
	 * Responsibilities associated with this role.
	 * @access  public
	 * @var     string
	 */
	public $responsibilities;

	/**
	 * The currency (coded using ISO 4217 ) used for the main salary information
	 * in this job posting or for this employee.
	 * @access  public
	 * @var     string
	 */
	public $salaryCurrency;

	/**
	 * Skills required to fulfill this role.
	 * @access  public
	 * @var     string
	 */
	public $skills;

	/**
	 * Any special commitments associated with this job posting.
	 * Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
	 * @access  public
	 * @var     string
	 */
	public $specialCommitments;

	/**
	 * The title of the job.
	 * @access  public
	 * @var     string
	 */
	public $title;

	/**
	 * The date after when the item is not valid.
	 * For example the end of an offer, salary period, or a period of opening hours.
	 * @access  public
	 * @var     string
	 */
	public $validThrough;

	/**
	 * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
	 * @access  public
	 * @var     string
	 */
	public $workHours;

	/**
	 * JobPosting constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * JobPosting toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * JobPosting destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>