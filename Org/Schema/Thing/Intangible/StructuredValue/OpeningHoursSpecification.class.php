<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class OpeningHoursSpecification
 * A structured value providing information about the opening hours of a place or a certain service inside a place.
 * The place is open if the opens property is specified, and closed otherwise.
 * If the value for the closes property is less than the value for the opens property then the hour range is assumed
 * to span over the next day.
 * @author      AppBels <app.bels@gmail.com>
 * @name        OpeningHoursSpecification
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/OpeningHoursSpecification
 * Date         02/04/2017
 */
class OpeningHoursSpecification extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * The closing hour of the place or service on the given day(s) of the week.
	 * @access	public
	 * @var		string
	 */
	public $closes;

	/**
	 * The day of the week for which these opening hours are valid.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\DayOfWeek
	 * @var		string
	 */
	public $dayOfWeek;

	/**
	 * The opening hour of the place or service on the given day(s) of the week.
	 * @access	public
	 * @var		string
	 */
	public $opens;

	/**
	 * The date when the item becomes valid.
	 * @access	public
	 * @var		string
	 */
	public $validFrom;

	/**
	 * The date after when the item is not valid.
	 * For example the end of an offer, salary period, or a period of opening hours.
	 * @access	public
	 * @vars	string
	 */
	public $validThrough;

	/**
	 * OpeningHoursSpecification constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * OpeningHoursSpecification toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * OpeningHoursSpecification destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>