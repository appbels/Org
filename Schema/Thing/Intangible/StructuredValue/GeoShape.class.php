<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class GeoShape
 * The geographic shape of a place.
 * A GeoShape can be described using several properties whose values are based on latitude/longitude pairs.
 * Either whitespace or commas can be used to separate latitude and longitude; whitespace should be used when
 * writing a list of several such points.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GeoShape
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/GeoShape
 * Date         02/04/2017
 */
class GeoShape extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * Physical address of the item.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
	 */
	public $address;

	/**
	 * The country. For example, USA.
	 * You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Place\AdministrativeArea\Country
	 */
	public $addressCountry;

	/**
	 * A box is the area enclosed by the rectangle formed by two points.
	 * The first point is the lower corner, the second point is the upper corner.
	 * A box is expressed as two points separated by a space character.
	 * @access	public
	 * @var		string
	 */
	public $box;

	/**
	 * A circle is the circular region of a specified radius centered at a specified latitude and longitude.
	 * A circle is expressed as a pair followed by a radius in meters.
	 * @access	public
	 * @var		string
	 */
	public $circle;

	/**
	 * The elevation of a location (WGS 84).
	 * @access	public
	 * @var		int|string
	 */
	public $elevation;

	/**
	 * A line is a point-to-point path consisting of two or more points.
	 * A line is expressed as a series of two or more point objects separated by space.
	 * @access	public
	 * @var		string
	 */
	public $line;

	/**
	 * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same.
	 * A polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
	 * @access	public
	 * @var		string
	 */
	public $polygon;

	/**
	 * The postal code. For example, 94043.
	 * @access	public
	 * @var		string
	 */
	public $postalCode;

	/**
	 * GeoShape constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GeoShape toString.
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
	 * GeoShape destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>