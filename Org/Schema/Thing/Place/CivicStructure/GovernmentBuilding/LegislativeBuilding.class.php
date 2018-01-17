<?php

namespace Org\Schema\Thing\Place\CivicStructure\GovernmentBuilding;

/**
 * Class LegislativeBuilding
 * A legislative building—for example, the state capitol.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LegislativeBuilding
 * @namespace   Org\Schema\Thing\Place\CivicStructure\GovernmentBuilding
 * @package     Org\Schema
 * @see         https://schema.org/LegislativeBuilding
 * Date         10/04/2017
 */
class LegislativeBuilding extends \Org\Schema\Thing\Place\CivicStructure\GovernmentBuilding
{

	/**
	 * LegislativeBuilding constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure\GovernmentBuilding::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LegislativeBuilding toString.
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
	 * LegislativeBuilding destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure\GovernmentBuilding::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>