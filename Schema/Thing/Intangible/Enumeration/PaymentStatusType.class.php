<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class PaymentStatusType.
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PaymentStatusType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/PaymentStatusType
 * Date         12/03/2017
 */
class PaymentStatusType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * An automatic payment system is in place and will be used.
	 * @see     https://schema.org/PaymentAutomaticallyApplied
	 * @var     string
	 */
	const PaymentAutomaticallyApplied = "https://schema.org/PaymentAutomaticallyApplied";

	/**
	 * The payment has been received and processed.
	 * @see     https://schema.org/PaymentComplete
	 * @var     string
	 */
	const PaymentComplete = "https://schema.org/PaymentComplete";

	/**
	 * The payee received the payment, but it was declined for some reason.
	 * @see     https://schema.org/PaymentDeclined
	 * @var     string
	 */
	const PaymentDeclined = "https://schema.org/PaymentDeclined";

	/**
	 * The payment is due, but still within an acceptable time to be received.
	 * @see     https://schema.org/PaymentDue
	 * @var     string
	 */
	const PaymentDue = "https://schema.org/PaymentDue";

	/**
	 * The payment is due and considered late.
	 * @see     https://schema.org/PaymentPastDue
	 * @var     string
	 */
	const PaymentPastDue = "https://schema.org/PaymentPastDue";

	/**
	 * PaymentStatusType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PaymentStatusType toString.
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
	 * PaymentStatusType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>