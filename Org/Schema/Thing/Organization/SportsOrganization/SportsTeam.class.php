<?php

namespace Org\Schema\Thing\Organization\SportsOrganization;

/**
 * Class SportsTeam
 * Organization: Sports team.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SportsTeam
 * @namespace   Org\Schema\Thing\Organization\SportsOrganization
 * @package     Org\Schema
 * @see         https://schema.org/SportsTeam
 * Date         09/04/2017
 */
class SportsTeam extends \Org\Schema\Thing\Organization\SportsOrganization
{

	/**
	 * A person that acts as performing member of a sports team;
	 * a player as opposed to a coach.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $athlete;

	/**
	 * A person that acts in a coaching role for a sports team.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $coach;

	/**
	 * SportsTeam constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\SportsOrganization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SportsTeam toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\SportsOrganization::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SportsTeam destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\SportsOrganization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>