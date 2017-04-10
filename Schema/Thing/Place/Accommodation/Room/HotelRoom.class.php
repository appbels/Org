<?php

namespace Org\Schema\Thing\Place\Accommodation\Room;

/**
 * Class HotelRoom
 * A hotel room is a single room in a hotel.
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        HotelRoom
 * @namespace   Org\Schema\Thing\Place\Accommodation\Room
 * @package     Org\Schema
 * @see         https://schema.org/HotelRoom
 * Date         10/04/2017
 */
class HotelRoom extends \Org\Schema\Thing\Place\Accommodation\Room
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
	 * HotelRoom constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation\Room::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * HotelRoom toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation\Room::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * HotelRoom destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation\Room::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>