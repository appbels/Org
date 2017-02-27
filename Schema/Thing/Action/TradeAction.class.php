<?php

namespace Org\Schema\Thing\Action;

/**
 * Class TradeAction.
 * The act of participating in an exchange of goods and services for monetary compensation.
 * An agent trades an object, product or service with a participant in exchange for a one time
 * or periodic payment.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TradeAction
 * @namespace   Org\Schema\Thing\Action
 * @package     Org\Schema
 * @see         https://schema.org/TradeAction
 * Date         27/02/2017
 */
class TradeAction extends \Org\Schema\Thing\Action
{

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
	 * One or more detailed price specifications, indicating the unit price and delivery
	 * or payment charges.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
	 */
	public $priceSpecification;

	/**
	 * TradeAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TradeAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>