<?php

namespace Org\Schema\Thing\Intangible\Service\FinancialProduct;

/**
 * Class PaymentService
 * A Service to transfer funds from a person or organization to a beneficiary person or organization.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PaymentService
 * @namespace   Org\Schema\Thing\Intangible\Service\FinancialProduct
 * @package     Org\Schema
 * @see         https://schema.org/PaymentService
 * Date         02/04/2017
 */
class PaymentService extends \Org\Schema\Thing\Intangible\Service\FinancialProduct
{

	/**
	 * PaymentService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PaymentService toString.
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
	 * PaymentService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>