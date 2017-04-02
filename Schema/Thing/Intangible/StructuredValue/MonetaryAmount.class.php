<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class MonetaryAmount
 * A monetary value or range.
 * This type can be used to describe an amount of money such as $50 USD, or a range as in describing a bank
 * account being suitable for a balance between £1,000 and £1,000,000 GBP, or the value of a salary, etc.
 * It is recommended to use PriceSpecification Types to describe the price of an Offer, Invoice, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MonetaryAmount
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/MonetaryAmount
 * Date         02/04/2017
 */
class MonetaryAmount extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * The currency in which the monetary amount is expressed (in 3-letter ISO 4217 format).
	 * @access	public
	 * @var		string
	 */
	public $currency;

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
	 * The date when the item becomes valid.
	 * @access	public
	 * @var		string
	 */
	public $validFrom;

	/**
	 * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
	 * @access	public
	 * @var		string
	 */
	public $validThrough;

	/**
	 * The value of the quantitative value or property value node.
	 * For QuantitativeValue and MonetaryAmount, the recommended type for values is 'Number'.
	 * For PropertyValue, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.
	 * @access	public
	 * @var		bool|int|string|\Org\Schema\Thing\Intangible\StructuredValue
	 */
	public $value;

	/**
	 * MonetaryAmount constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MonetaryAmount toString.
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
	 * MonetaryAmount destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>