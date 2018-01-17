<?php

namespace Org\Schema\Thing\Intangible\Offer;

/**
 * Class AggregateOffer.
 * When a single product is associated with multiple offers (for example, the same pair of
 * shoes is offered by different merchants), then AggregateOffer can be used.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AggregateOffer
 * @namespace   Org\Schema\Thing\Intangible\Offer
 * @package     Org\Schema
 * @see         https://schema.org/AggregateOffer
 * Date         21/03/2017
 */
class AggregateOffer extends \Org\Schema\Thing\Intangible\Offer
{

	/**
	 * The highest price of all offers available.
	 * @access  public
	 * @var     int|string
	 */
	public $highPrice;

	/**
	 * The lowest price of all offers available.
	 * @access  public
	 * @var     int|string
	 */
	public $lowPrice;

	/**
	 * The number of offers for the product.
	 * @access  public
	 * @var     int
	 */
	public $offerCount;

	/**
	 * An offer to provide this item—for example, an offer to sell a product,
	 * rent the DVD of a movie, perform a service, or give away tickets to an event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Offer
	 */
	public $offers;

	/**
	 * AggregateOffer constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Offer::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AggregateOffer toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Offer::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * AggregateOffer destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Offer::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>