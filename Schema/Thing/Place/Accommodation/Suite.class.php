<?php

namespace Org\Schema\Thing\Place\Accommodation;

/**
 * Class Suite
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Suite
 * @namespace   Org\Schema\Thing\Place\Accommodation
 * @package     Org\Schema
 * @see         https://schema.org/Suite
 * Date         10/04/2017
 */
class Suite extends \Org\Schema\Thing\Place\Accommodation
{

	/**
	 * The type of bed or beds included in the accommodation.
	 * For the single case of just one bed of a certain type, you use bed directly with a text.
	 * If you want to indicate the quantity of a certain kind of bed, use an instance of BedDetails.
	 * For more detailed information, use the amenityFeature property.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\BedDetails
	 */
	public $bed;

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
	 * Suite constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Suite toString.
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
	 * Suite destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>