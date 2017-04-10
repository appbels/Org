<?php

namespace Org\Schema\Thing\Place\Accommodation\House;

/**
 * Class SingleFamilyResidence
 * Residence type: Single-family home.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SingleFamilyResidence
 * @namespace   Org\Schema\Thing\Place\Accommodation\House
 * @package     Org\Schema
 * @see         https://schema.org/SingleFamilyResidence
 * Date         10/04/2017
 */
class SingleFamilyResidence extends \Org\Schema\Thing\Place\Accommodation\House
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
	 * SingleFamilyResidence constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation\House::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SingleFamilyResidence toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation\House::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SingleFamilyResidence destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation\House::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>