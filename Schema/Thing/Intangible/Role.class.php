<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Role
 * Represents additional information about a relationship or property.
 * For example a Role can be used to say that a 'member' role linking some SportsTeam to a player
 * occurred during a particular time period. Or that a Person's 'actor' role in a Movie was for
 * some particular characterName. Such properties can be attached to a Role entity, which is
 * then associated with the main entities using ordinary properties like 'member' or 'actor'.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Role
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Role
 * Date         02/04/2017
 */
class Role extends \Org\Schema\Thing\Intangible
{

	/**
	 * The end date and time of the item (in ISO 8601 date format).
	 * @access	public
	 * @var		string
	 */
	public $endDate;

	/**
	 * A role played, performed or filled by a person or organization.
	 * For example, the team of creators for a comic book might fill the roles
	 * named 'inker', 'penciller', and 'letterer'; or an athlete in a SportsTeam
	 * might play in the position named 'Quarterback'.
	 * Supersedes namedPosition.
	 * @access	public
	 * @var		string
	 */
	public $roleName;

	/**
	 * The start date and time of the item (in ISO 8601 date format).
	 * @access	public
	 * @var		string
	 */
	public $startDate;

	/**
	 * Role constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Role toString.
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
	 * Role destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>