<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Invoice.
 * A statement of the money due for goods or services; a bill.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Invoice
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Invoice
 * Date         21/03/2017
 */
class Invoice extends \Org\Schema\Thing\Intangible
{

	/**
	 * The identifier for the account the payment will be applied to.
	 * @access  public
	 * @var     string
	 */
	public $accountId;

	/**
	 * The time interval used to compute the invoice.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $billingPeriod;

	/**
	 * An entity that arranges for an exchange between a buyer and a seller.
	 * In most cases a broker never acquires or releases ownership of a product or
	 * service involved in an exchange. If it is not clear whether an entity is a broker,
	 * seller, or buyer, the latter two terms are preferred.
	 * Supersedes bookingAgent.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $broker;

	/**
	 * A category for the item. Greater signs or slashes can be used to informally indicate
	 * a category hierarchy.
	 * @access  public
	 * @var     string|\Org\Schema\Thing
	 */
	public $category;

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
	 * The minimum payment required at this time.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\MonetaryAmount|\Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
	 */
	public $minimumPaymentDue;

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
	 * The status of payment; whether the invoice has been paid or not.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\PaymentStatusType
	 * @var     string
	 */
	public $paymentStatus;

	/**
	 * The service provider, service operator, or service performer; the goods producer.
	 * Another party (a seller) may offer those services or goods on behalf of the provider.
	 * A provider may also serve as the seller.
	 * Supersedes carrier.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $provider;

	/**
	 * The Order(s) related to this Invoice.
	 * One or more Orders may be combined into a single Invoice.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Order
	 */
	public $referencesOrder;

	/**
	 * The date the invoice is scheduled to be paid.
	 * @access  public
	 * @var     string
	 */
	public $scheduledPaymentDate;

	/**
	 * The total amount due.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\MonetaryAmount|\Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
	 */
	public $totalPaymentDue;

	/**
	 * Invoice constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Invoice toString.
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
	 * Invoice destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>