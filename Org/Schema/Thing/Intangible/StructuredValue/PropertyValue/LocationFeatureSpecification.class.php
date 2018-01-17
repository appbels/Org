<?php

namespace Org\Schema\Thing\Intangible\StructuredValue\PropertyValue;

/**
 * Class LocationFeatureSpecification
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        LocationFeatureSpecification
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue\PropertyValue
 * @package     Org\Schema
 * @see         https://schema.org/LocationFeatureSpecification
 * Date         02/04/2017
 */
class LocationFeatureSpecification extends \Org\Schema\Thing\Intangible\StructuredValue\PropertyValue
{

	/**
	 * The hours during which this service or contact is available.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\OpeningHoursSpecification
	 */
	public $hoursAvailable;

	/**
	 * The date when the item becomes valid.
	 * @access	public
	 * @var		string
	 */
	public $validFrom;

	/**
	 * The date after when the item is not valid.
	 * For example the end of an offer, salary period, or a period of opening hours.
	 * @access  public
	 * @var     string
	 */
	public $validThrough;

	/**
	 * LocationFeatureSpecification constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PropertyValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LocationFeatureSpecification toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PropertyValue::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * LocationFeatureSpecification destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PropertyValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>