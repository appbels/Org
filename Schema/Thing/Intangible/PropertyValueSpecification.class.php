<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class PropertyValueSpecification
 * A Property value specification.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PropertyValueSpecification
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/PropertyValueSpecification
 * Date         30/03/2017
 */
class PropertyValueSpecification extends \Org\Schema\Thing\Intangible
{

	/**
	 * The default value of the input. For properties that expect a literal, the default is a literal value,
	 * for properties that expect an object, it's an ID reference to one of the current values.
	 * @access	public
	 * @var		string|\Org\Schema\Thing
	 */
	public $defaultValue;

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
	 * Whether multiple values are allowed for the property.
	 * Default is false.
	 * @access	public
	 * @var		bool
	 */
	public $multipleValues;

	/**
	 * Whether or not a property is mutable.
	 * Default is false.
	 * Specifying this for a property that also has a value makes it act
	 * similar to a "hidden" input in an HTML form.
	 * @access	public
	 * @var		bool
	 */
	public $readonlyValue;

	/**
	 * The stepValue attribute indicates the granularity that is expected (and required)
	 * of the value in a PropertyValueSpecification.
	 * @access	public
	 * @var		int
	 */
	public $stepValue;

	/**
	 * Specifies the allowed range for number of characters in a literal value.
	 * @access	public
	 * @var		int
	 */
	public $valueMaxLength;

	/**
	 * Specifies the minimum allowed range for number of characters in a literal value.
	 * @access	public
	 * @var		int
	 */
	public $valueMinLength;

	/**
	 * Indicates the name of the PropertyValueSpecification to be used in URL templates
	 * and form encoding in a manner analogous to HTML's input@name.
	 * @access	public
	 * @var		string
	 */
	public $valueName;

	/**
	 * Specifies a regular expression for testing literal values according to the HTML spec.
	 * @access	public
	 * @var		string
	 */
	public $valuePattern;

	/**
	 * Whether the property must be filled in to complete the action.
	 * Default is false.
	 * @access	public
	 * @var		bool
	 */
	public $valueRequired;

	/**
	 * PropertyValueSpecification constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PropertyValueSpecification toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PropertyValueSpecification destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>