<?php

namespace Org\Schema\Thing\Place;

/**
 * Class Accommodation
 * An accommodation is a place that can accommodate human beings, e.g. a hotel room,
 * a camping pitch, or a meeting room.
 * Many accommodations are for overnight stays, but this is not a mandatory requirement.
 * For more specific types of accommodations not defined in schema.org,
 * one can use additionalType with external vocabularies.
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Accommodation
 * @namespace   Org\Schema\Thing\Place
 * @package     Org\Schema
 * @see         https://schema.org/Accommodation
 * Date         10/04/2017
 */
class Accommodation extends \Org\Schema\Thing\Place
{

	/**
	 * The size of the accommodation, e.g. in square meter or squarefoot.
	 * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for square yard
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $floorSize;

	/**
	 * The number of rooms (excluding bathrooms and closets) of the acccommodation or lodging business.
	 * Typical unit code(s): ROM for room or C62 for no unit.
	 * The type of room can be put in the unitText property of the QuantitativeValue.
	 * @access	public
	 * @var		int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $numberOfRooms;

	/**
	 * Indications regarding the permitted usage of the accommodation.
	 * @access	public
	 * @var		string
	 */
	public $permittedUsage;

	/**
	 * Indicates whether pets are allowed to enter the accommodation or lodging business.
	 * More detailed information can be put in a text value.
	 * @access	public
	 * @var		bool|string
	 */
	public $petsAllowed;

	/**
	 * Accommodation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Accommodation toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Accommodation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>