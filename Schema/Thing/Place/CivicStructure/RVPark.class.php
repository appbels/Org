<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class RVPark
 * A place offering space for "Recreational Vehicles", Caravans, mobile homes and the like.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RVPark
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/RVPark
 * Date         10/04/2017
 */
class RVPark extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * RVPark constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RVPark toString.
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
	 * RVPark destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>