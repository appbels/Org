<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class PropertyValue
 * A property-value pair, e.g. representing a feature of a product or place.
 * Use the 'name' property for the name of the property.
 * If there is an additional human-readable version of the value, put that into the 'description' property.
 * Always use specific schema.org properties when a) they exist and b) you can populate them.
 * Using PropertyValue as a substitute will typically not trigger the
 * same effect as using the original, specific property.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PropertyValue
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/PropertyValue
 * Date         02/04/2017
 */
class PropertyValue extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * The upper value of some characteristic or property.
	 * @access	public
	 * @var		int
	 */
	public $maxValue;

	/**
	 * The lower value of some characteristic or property.
	 * @access	public
	 * @var		int
	 */
	public $minValue;

	/**
	 * A commonly used identifier for the characteristic represented by the property,
	 * e.g. a manufacturer or a standard code for a property.
	 * propertyID can be (1) a prefixed string, mainly meant to be used with standards
	 * for product properties; (2) a site-specific, non-prefixed string
	 * (e.g. the primary key of the property or the vendor-specific id of the property),
	 * or (3) a URL indicating the type of the property, either pointing to an external
	 * vocabulary, or a Web resource that describes the property (e.g. a glossary entry).
	 * Standards bodies should promote a standard prefix for the identifiers of
	 * properties from their standards.
	 * @access	public
	 * @var		string
	 */
	public $propertyID;

	/**
	 * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL.
	 * Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
	 * @access	public
	 * @var		string
	 */
	public $unitCode;

	/**
	 * A string or text indicating the unit of measurement.
	 * Useful if you cannot provide a standard unit code for unitCode.
	 * @access	public
	 * @var		string
	 */
	public $unitText;

	/**
	 * The value of the quantitative value or property value node.
	 * For QuantitativeValue and MonetaryAmount, the recommended type for values is 'Number'.
	 * For PropertyValue, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.
	 * @access	public
	 * @var		bool|int|\Org\Schema\Thing\Intangible\StructuredValue
	 */
	public $value;

	/**
	 * A pointer to a secondary value that provides additional information on
	 * the original value, e.g. a reference temperature.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Enumeration|\Org\Schema\Thing\Intangible\StructuredValue\PropertyValue|\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue|\Org\Schema\Thing\Intangible\StructuredValue
	 */
	public $valueReference;

	/**
	 * PropertyValue constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PropertyValue toString.
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
	 * PropertyValue destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>