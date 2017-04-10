<?php

namespace Org\Schema\Thing\Place\CivicStructure\GovernmentBuilding;

/**
 * Class Courthouse
 * A courthouse.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Courthouse
 * @namespace   Org\Schema\Thing\Place\CivicStructure\GovernmentBuilding
 * @package     Org\Schema
 * @see         https://schema.org/Courthouse
 * Date         10/04/2017
 */
class Courthouse extends \Org\Schema\Thing\Place\CivicStructure\GovernmentBuilding
{

	/**
	 * Courthouse constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure\GovernmentBuilding::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Courthouse toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure\GovernmentBuilding::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Courthouse destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure\GovernmentBuilding::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>