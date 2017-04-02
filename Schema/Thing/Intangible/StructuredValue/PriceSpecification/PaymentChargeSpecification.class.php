<?php

namespace Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification;

/**
 * Class PaymentChargeSpecification
 * The costs of settling the payment using a particular payment method.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PaymentChargeSpecification
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
 * @package     Org\Schema
 * @see         https://schema.org/PaymentChargeSpecification
 * Date         02/04/2017
 */
class PaymentChargeSpecification extends \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
{

	/**
	 * The delivery method(s) to which the delivery charge or payment charge specification applies.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod
	 * @var		string
	 */
	public $appliesToDeliveryMethod;

	/**
	 * The payment method(s) to which the payment charge specification applies.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\PaymentMethod
	 * @var		string
	 */
	public $appliesToPaymentMethod;

	/**
	 * PaymentChargeSpecification constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PaymentChargeSpecification toString.
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
	 * PaymentChargeSpecification destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>