<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class Airport
 * An airport.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Airport
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/Airport
 * Date         10/04/2017
 */
class Airport extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * IATA identifier for an airline or airport.
	 * @access	public
	 * @var		string
	 */
	public $iataCode;

	/**
	 * ICAO identifier for an airport.
	 * @access	public
	 * @var		string
	 */
	public $icaoCode;

	/**
	 * Airport constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Airport toString.
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
	 * Airport destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>