<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class GeoCoordinates
 * The geographic coordinates of a place or event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GeoCoordinates
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/GeoCoordinates
 * Date         02/04/2017
 */
class GeoCoordinates extends \Org\Schema\Thing\Intangible\StructuredValue
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
	 * The elevation of a location (WGS 84).
	 * @access	public
	 * @var		int|string
	 */
	public $elevation;

	/**
	 * The latitude of a location. For example 37.42242 (WGS 84).
	 * @access	public
	 * @var		int|string
	 */
	public $latitude;

	/**
	 * The longitude of a location. For example -122.08585 (WGS 84).
	 * @access	public
	 * @var		int|string
	 */
	public $longitude;

	/**
	 * The postal code. For example, 94043.
	 * @access	public
	 * @var		string
	 */
	public $postalCode;

	/**
	 * GeoCoordinates constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GeoCoordinates toString.
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
	 * GeoCoordinates destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>