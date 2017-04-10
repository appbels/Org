<?php

namespace Org\Schema\Thing\Place\Accommodation;

/**
 * Class Apartment
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Apartment
 * @namespace   Org\Schema\Thing\Place\Accommodation
 * @package     Org\Schema
 * @see         https://schema.org/Apartment
 * Date         10/04/2017
 */
class Apartment extends \Org\Schema\Thing\Place\Accommodation
{

	/**
	 * The allowed total occupancy for the accommodation in persons (including infants etc).
	 * For individual accommodations, this is not necessarily the legal maximum but defines
	 * the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
	 * Typical unit code(s): C62 for person
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $occupancy;

	/**
	 * Apartment constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Apartment toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Apartment destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>