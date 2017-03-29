<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class ProgramMembership
 * Used to describe membership in a loyalty programs (e.g. "StarAliance"),
 * traveler clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ProgramMembership
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/ProgramMembership
 * Date         30/03/2017
 */
class ProgramMembership extends \Org\Schema\Thing\Intangible
{

	/**
	 * The organization (airline, travelers' club, etc.) the membership is made with.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization
	 */
	public $hostingOrganization;

	/**
	 * A member of an Organization or a ProgramMembership. Organizations can be members of organizations;
	 * ProgramMembership is typically for individuals.
	 * Supersedes members, musicGroupMember.
	 * Inverse property: memberOf.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $member;

	/**
	 * A unique identifier for the membership.
	 * @access	public
	 * @var		string
	 */
	public $membershipNumber;

	/**
	 * The program providing the membership.
	 * @access	public
	 * @var		string
	 */
	public $programName;

	/**
	 * ProgramMembership constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ProgramMembership toString.
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
	 * ProgramMembership destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>