<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class QuantitativeValue
 * A point value or interval for product characteristics and other purposes.
 * @author      AppBels <app.bels@gmail.com>
 * @name        QuantitativeValue
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/QuantitativeValue
 * Date         02/04/2017
 */
class QuantitativeValue extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * A property-value pair representing an additional characteristics of the entitity,
	 * e.g. a product feature or another characteristic for which there is no matching property
	 * in schema.org.
	 * Note: Publishers should be aware that applications designed to use specific schema.org
	 * properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...)
	 * will typically expect such data to be provided using those properties, rather than using the
	 * generic property/value mechanism.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\PropertyValue
	 */
	public $additionalProperty;

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
	 * QuantitativeValue constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * QuantitativeValue toString.
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
	 * QuantitativeValue destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>