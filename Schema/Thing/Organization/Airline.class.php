<?php

namespace Org\Schema\Thing\Organization;

/**
 * Class Airline
 * An organization that provides flights for passengers.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Airline
 * @namespace   Org\Schema\Thing\Organization
 * @package     Org\Schema
 * @see         https://schema.org/Airline
 * Date         02/04/2017
 */
class Airline extends \Org\Schema\Thing\Organization
{

	/**
	 * The type of boarding policy used by the airline (e.g. zone-based or group-based).
	 * One const of BoardingPolicyType
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\BoardingPolicyType
	 * @var     string
	 */
	public $boardingPolicy;

	/**
	 * IATA identifier for an airline or airport.
	 * @access	public
	 * @var		string
	 */
	public $iataCode;

	/**
	 * Airline constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Airline toString.
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
	 * Airline destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>