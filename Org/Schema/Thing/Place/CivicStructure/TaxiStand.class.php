<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class TaxiStand
 * A taxi stand.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TaxiStand
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/TaxiStand
 * Date         10/04/2017
 */
class TaxiStand extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * TaxiStand constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TaxiStand toString.
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
	 * TaxiStand destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>