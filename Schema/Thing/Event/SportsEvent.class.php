<?php

namespace Org\Schema\Thing\Event;

/**
 * Class SportsEvent.
 * SportsEvent
 * @author      AppBels <app.bels@gmail.com>
 * @name        SportsEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/SportsEvent
 * Date         04/03/2017
 */
class SportsEvent extends \Org\Schema\Thing\Event
{

	/**
	 * The away team in a sports event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person|\Org\Schema\Thing\Organization\SportsOrganization\SportsTeam
	 */
	public $awayTeam;

	/**
	 * A competitor in a sports event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person|\Org\Schema\Thing\Organization\SportsOrganization\SportsTeam
	 */
	public $competitor;

	/**
	 * The home team in a sports event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person|\Org\Schema\Thing\Organization\SportsOrganization\SportsTeam
	 */
	public $homeTeam;

	/**
	 * SportsEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SportsEvent toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SportsEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>