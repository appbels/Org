<?php

namespace Org\Schema\Thing\Intangible\Service\FinancialProduct;

/**
 * Class PaymentCard.
 * A payment method using a credit, debit, store or other card to associate the payment with an account.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PaymentCard
 * @namespace   Org\Schema\Thing\Intangible\Service\FinancialProduct
 * @package     Org\Schema
 * @see         https://schema.org/PaymentCard
 * Date         12/03/2017
 */
class PaymentCard extends \Org\Schema\Thing\Intangible\Service\FinancialProduct
{

	###################################################################
	##                                                               ##
	## PaymentMethod properties                                      ##
	##                                                               ##
	###################################################################
	/**
	 * Payment by bank transfer in advance, i.e., the offering gr:BusinessEntity will
	 * inform the buying party about their bank account details and will deliver the
	 * goods upon receipt of the due amount.
	 * This is equivalent to payment by wire transfer.
	 * @see     http://purl.org/goodrelations/v1#ByBankTransferInAdvance
	 * @var     string
	 */
	const ByBankTransferInAdvance = "http://purl.org/goodrelations/v1#ByBankTransferInAdvance";

	/**
	 * Payment by bank transfer after delivery, i.e., the offering gr:BusinessEntity will deliver first,
	 * inform the buying party about the due amount and their bank account details, and expect payment
	 * shortly after delivery.
	 * @see     http://purl.org/goodrelations/v1#ByInvoice
	 * @var     string
	 */
	const ByInvoice = "http://purl.org/goodrelations/v1#ByInvoice";

	/**
	 * Payment by cash upon delivery or pickup.
	 * @see     http://purl.org/goodrelations/v1#Cash
	 * @var     string
	 */
	const Cash = "http://purl.org/goodrelations/v1#Cash";

	/**
	 * Payment by sending a check in advance, i.e., the offering gr:BusinessEntity will deliver the
	 * goods upon receipt of a check over the due amount.
	 * There are variations in handling payment by check - sometimes, shipment will be upon receipt of
	 * the check as a document, sometimes the shipment will take place only upon successful crediting
	 * of the check.
	 * @see     http://purl.org/goodrelations/v1#CheckInAdvance
	 * @var     string
	 */
	const CheckInAdvance = "http://purl.org/goodrelations/v1#CheckInAdvance";

	/**
	 * Collect on delivery / Cash on delivery - A payment method where the recipient of goods pays at
	 * the time of delivery. Usually, the amount of money is collected by the transportation company
	 * handling the goods.
	 * @see     http://purl.org/goodrelations/v1#COD
	 * @var     string
	 */
	const COD = "http://purl.org/goodrelations/v1#COD";

	/**
	 * Payment by direct debit, i.e., the buying party will inform the offering gr:BusinessEntity about
	 * its bank account details and authorizes the gr:BusinessEntity to collect the agreed amount
	 * directly from that account.
	 * @see     http://purl.org/goodrelations/v1#DirectDebit
	 * @var     string
	 */
	const DirectDebit = "http://purl.org/goodrelations/v1#DirectDebit";

	/**
	 * Payment via the Google Checkout payment service.
	 * @see     http://purl.org/goodrelations/v1#GoogleCheckout
	 * @var     string
	 */
	const GoogleCheckout = "http://purl.org/goodrelations/v1#GoogleCheckout";

	/**
	 * Payment via the PayPal payment service.
	 * @see     http://purl.org/goodrelations/v1#PayPal
	 * @var     string
	 */
	const PayPal = "http://purl.org/goodrelations/v1#PayPal";

	/**
	 * Payment via the PaySwarm distributed micropayment service.
	 * @see     http://purl.org/goodrelations/v1#PaySwarm
	 * @var     string
	 */
	const PaySwarm = "http://purl.org/goodrelations/v1#PaySwarm";

	/**
	 * PaymentCard constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PaymentCard toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PaymentCard destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>