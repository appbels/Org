<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class GovernmentBuilding
 * A government building.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GovernmentBuilding
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/GovernmentBuilding
 * Date         10/04/2017
 */
class GovernmentBuilding extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * GovernmentBuilding constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GovernmentBuilding toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * GovernmentBuilding destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>