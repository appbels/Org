<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class ParkingFacility
 * A parking lot or other parking facility.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ParkingFacility
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/ParkingFacility
 * Date         10/04/2017
 */
class ParkingFacility extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * ParkingFacility constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ParkingFacility toString.
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
	 * ParkingFacility destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>