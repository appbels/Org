<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class QualitativeValue.
 * A predefined value for a product characteristic, e.g. the power cord plug
 * type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
 * @author      AppBels <app.bels@gmail.com>
 * @name        QualitativeValue
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/QualitativeValue
 * Date         12/03/2017
 */
class QualitativeValue extends \Org\Schema\Thing\Intangible\Enumeration
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
	 * This ordering relation for qualitative values indicates that the subject is equal to the object.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 */
	public $equal;

	/**
	 * This ordering relation for qualitative values indicates that the subject is greater than the object.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 */
	public $greater;

	/**
	 * This ordering relation for qualitative values indicates that the subject is greater than or
	 * equal to the object.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 */
	public $greaterOrEqual;

	/**
	 * This ordering relation for qualitative values indicates that the subject is lesser than the object.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 */
	public $lesser;

	/**
	 * This ordering relation for qualitative values indicates that the subject is lesser than
	 * or equal to the object.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 */
	public $lesserOrEqual;

	/**
	 * This ordering relation for qualitative values indicates that the subject is not equal to the object.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 */
	public $nonEqual;

	/**
	 * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Enumeration|\Org\Schema\Thing\Intangible\StructuredValue\PropertyValue|\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue|\Org\Schema\Thing\Intangible\StructuredValue
	 */
	public $valueReference;

	/**
	 * QualitativeValue constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * QualitativeValue toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * QualitativeValue destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>