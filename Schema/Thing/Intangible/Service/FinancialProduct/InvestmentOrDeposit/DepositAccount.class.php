<?php

namespace Org\Schema\Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit;

/**
 * Class DepositAccount
 * A type of Bank Account with a main purpose of depositing funds to gain interest or other benefits.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DepositAccount
 * @namespace   Org\Schema\Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit
 * @package     Org\Schema
 * @see         https://schema.org/DepositAccount
 * @see			\Org\Schema\Thing\Intangible\Service\FinancialProduct\BankAccount\DepositAccount
 * Date         02/04/2017
 */
class DepositAccount extends \Org\Schema\Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit
{

	/**
	 * DepositAccount constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DepositAccount toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * DepositAccount destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct\InvestmentOrDeposit::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>