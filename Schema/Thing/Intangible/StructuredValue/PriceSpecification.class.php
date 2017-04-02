<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class PriceSpecification
 * A structured value representing a price or price range. Typically, only the subclasses of this type are used for markup.
 * It is recommended to use MonetaryAmount to describe independent amounts of money such as a salary, credit card limits, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PriceSpecification
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/PriceSpecification
 * Date         02/04/2017
 */
class PriceSpecification extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * The interval and unit of measurement of ordering quantities for which the offer or
	 * price specification is valid.
	 * This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $eligibleQuantity;

	/**
	 * The transaction volume, in a monetary unit, for which the offer or price specification
	 * is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a
	 * certain order volume, or to limit the acceptance of credit cards to purchases
	 * to a certain minimal amount.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
	 */
	public $eligibleTransactionVolume;

	/**
	 * The highest price if the price is a range.
	 * @access	public
	 * @var		int
	 */
	public $maxPrice;

	/**
	 * The lowest price if the price is a range.
	 * @access	public
	 * @var		int
	 */
	public $minPrice;

	/**
	 * The offer price of a product, or of a price component when attached to PriceSpecification
	 * and its subtypes.
	 * Usage guidelines:
	 *      Use the priceCurrency property (with ISO 4217 codes e.g. "USD") instead of including
	 *      ambiguous symbols such as '$' in the value.
	 *      Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point.
	 *      Avoid using these symbols as a readability separator.
	 *      Note that both RDFa and Microdata syntax allow the use of a "content=" attribute for
	 *      publishing simple machine-readable values alongside more human-friendly formatting.
	 *      Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039))
	 *      rather than superficially similiar Unicode symbols.
	 * @access  public
	 * @var     int|string
	 */
	public $price;

	/**
	 * The currency (in 3-letter ISO 4217 format) of the price or a price component,
	 * when attached to PriceSpecification and its subtypes.
	 * @access	public
	 * @var		string
	 */
	public $priceCurrency;

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
	 * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
	 * @access	public
	 * @var		bool
	 */
	public $valueAddedTaxIncluded;

	/**
	 * PriceSpecification constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PriceSpecification toString.
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
	 * PriceSpecification destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>