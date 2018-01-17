<?php

namespace Org\Schema\Thing\Organization;

/**
 * Class SportsOrganization
 * Represents the collection of all sports organizations, including sports teams, governing bodies, and sports associations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SportsOrganization
 * @namespace   Org\Schema\Thing\Organization
 * @package     Org\Schema
 * @see         https://schema.org/SportsOrganization
 * Date         09/04/2017
 */
class SportsOrganization extends \Org\Schema\Thing\Organization
{

	/**
	 * A type of sport (e.g. Baseball).
	 * @access	public
	 * @var		string
	 */
	public $sport;

	/**
	 * SportsOrganization constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SportsOrganization toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SportsOrganization destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>