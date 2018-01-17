<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Order.
 * An order is a confirmation of a transaction (a receipt), which can contain
 * multiple line items, each represented by an Offer that has been accepted by the customer.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Order
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Order
 * Date         28/03/2017
 */
class Order extends \Org\Schema\Thing\Intangible
{

	/**
	 * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Offer
	 */
	public $acceptedOffer;

	/**
	 * The billing address for the order.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
	 */
	public $billingAddress;

	/**
	 * An entity that arranges for an exchange between a buyer and a seller.
	 * In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.
	 * If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
	 * Supersedes bookingAgent.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $broker;

	/**
	 * A number that confirms the given order or payment has been received.
	 * @access  public
	 * @var     string
	 */
	public $confirmationNumber;

	/**
	 * Party placing the order or paying the invoice.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $customer;

	/**
	 * Any discount applied (to an Order).
	 * @access  public
	 * @var     int|string
	 */
	public $discount;

	/**
	 * Code used to redeem a discount.
	 * @access  public
	 * @var     string
	 */
	public $discountCode;

	/**
	 * The currency (in 3-letter ISO 4217 format) of the discount.
	 * @access  public
	 * @var     string
	 */
	public $discountCurrency;

	/**
	 * Was the offer accepted as a gift for someone other than the buyer.
	 * @access  public
	 * @var     bool
	 */
	public $isGift;

	/**
	 * Date order was placed.
	 * @access  public
	 * @var     string
	 */
	public $orderDate;

	/**
	 * The delivery of the parcel related to this order or order item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\ParcelDelivery
	 */
	public $orderDelivery;

	/**
	 * The identifier of the transaction.
	 * @access  public
	 * @var     string
	 */
	public $orderNumber;

	/**
	 * The current status of the order.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\OrderStatus
	 * @var     string
	 */
	public $orderStatus;

	/**
	 * The item ordered.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\OrderItem|\Org\Schema\Thing\Product
	 */
	public $orderedItem;

	/**
	 * The order is being paid as part of the referenced Invoice.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Invoice
	 */
	public $partOfInvoice;

	/**
	 * The date that payment is due. Supersedes paymentDue.
	 * @access  public
	 * @var     string
	 */
	public $paymentDueDate;

	/**
	 * The name of the credit card or other method of payment for the order.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\PaymentMethod
	 * @var     string
	 */
	public $paymentMethod;

	/**
	 * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
	 * @access  public
	 * @var     string
	 */
	public $paymentMethodId;

	/**
	 * The URL for sending a payment.
	 * @access  public
	 * @var     string
	 */
	public $paymentUrl;

	/**
	 * An entity which offers (sells / leases / lends / loans) the services / goods.
	 * A seller may also be a provider.
	 * Supersedes merchant, vendor.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $seller;

	/**
	 * Order constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Order toString.
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
	 * Order destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>