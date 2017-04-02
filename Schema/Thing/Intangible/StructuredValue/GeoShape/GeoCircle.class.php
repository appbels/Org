<?php

namespace Org\Schema\Thing\Intangible\StructuredValue\GeoShape;

/**
 * Class GeoCircle
 * A GeoCircle is a GeoShape representing a circular geographic area.
 * As it is a GeoShape it provides the simple textual property 'circle', but also allows the combination of postalCode
 * alongside geoRadius.
 * The center of the circle can be indicated via the 'geoMidpoint' property, or more approximately
 * using 'address', 'postalCode'.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GeoCircle
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue\GeoShape
 * @package     Org\Schema
 * @see         https://schema.org/GeoCircle
 * Date         02/04/2017
 */
class GeoCircle extends \Org\Schema\Thing\Intangible\StructuredValue\GeoShape
{

	/**
	 * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\GeoCoordinates
	 */
	public $geoMidpoint;

	/**
	 * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
	 * @access	public
	 * @var		int|string|\Org\Schema\Thing\Intangible\Quantity\Distance
	 */
	public $geoRadius;

	/**
	 * GeoCircle constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\GeoShape::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GeoCircle toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\GeoShape::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * GeoCircle destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\GeoShape::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>