<?php

namespace Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification;

/**
 * Class UnitPriceSpecification
 * The price asked for a given offer by the respective organization or person.
 * @author      AppBels <app.bels@gmail.com>
 * @name        UnitPriceSpecification
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
 * @package     Org\Schema
 * @see         https://schema.org/UnitPriceSpecification
 * Date         02/04/2017
 */
class UnitPriceSpecification extends \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
{

	/**
	 * This property specifies the minimal quantity and rounding increment that
	 * will be the basis for the billing.
	 * The unit of measurement is specified by the unitCode property.
	 * @access	public
	 * @var		int
	 */
	public $billingIncrement;

	/**
	 * A short text or acronym indicating multiple price specifications for the same offer,
	 * e.g. SRP for the suggested retail price or INVOICE for the invoice price,
	 * mostly used in the car industry.
	 * @access	public
	 * @var		string
	 */
	public $priceType;

	/**
	 * The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh of electricity.
	 * This property is a replacement for unitOfMeasurement for the advanced
	 * cases where the price does not relate to a standard unit.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $referenceQuantity;

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
	 * UnitPriceSpecification constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * UnitPriceSpecification toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * UnitPriceSpecification destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>