<?php

namespace Org\Schema\Thing\Intangible\Service\FinancialProduct;

/**
 * Class BankAccount
 * A product or service offered by a bank whereby one may deposit, withdraw or transfer money and in some cases be paid interest.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BankAccount
 * @namespace   Org\Schema\Thing\Intangible\Service\FinancialProduct
 * @package     Org\Schema
 * @see         https://schema.org/BankAccount
 * Date         02/04/2017
 */
class BankAccount extends \Org\Schema\Thing\Intangible\Service\FinancialProduct
{

	/**
	 * BankAccount constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BankAccount toString.
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
	 * BankAccount destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>