<?php

namespace Org\Schema\Thing\Intangible\Service\FinancialProduct;

/**
 * Class InvestmentOrDeposit
 * A type of financial product that typically requires the client to transfer funds to
 * a financial service in return for potential beneficial financial return.
 * @author      AppBels <app.bels@gmail.com>
 * @name        InvestmentOrDeposit
 * @namespace   Org\Schema\Thing\Intangible\Service\FinancialProduct
 * @package     Org\Schema
 * @see         https://schema.org/InvestmentOrDeposit
 * Date         02/04/2017
 */
class InvestmentOrDeposit extends \Org\Schema\Thing\Intangible\Service\FinancialProduct
{

	/**
	 * The amount of money.
	 * @access	public
	 * @var		int|\Org\Schema\Thing\Intangible\StructuredValue\MonetaryAmount
	 */
	public $amount;

	/**
	 * InvestmentOrDeposit constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * InvestmentOrDeposit toString.
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
	 * InvestmentOrDeposit destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>