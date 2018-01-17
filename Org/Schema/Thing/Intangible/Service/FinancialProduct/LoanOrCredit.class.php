<?php

namespace Org\Schema\Thing\Intangible\Service\FinancialProduct;

/**
 * Class LoanOrCredit.
 * A financial product for the loaning of an amount of money under agreed terms and charges.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LoanOrCredit
 * @namespace   Org\Schema\Thing\Intangible\Service\FinancialProduct
 * @package     Org\Schema
 * @see         https://schema.org/LoanOrCredit
 * Date         12/03/2017
 */
class LoanOrCredit extends \Org\Schema\Thing\Intangible\Service\FinancialProduct
{

	/**
	 * The amount of money.
	 * @access  public
	 * @var     int|\Org\Schema\Thing\Intangible\StructuredValue\MonetaryAmount
	 */
	public $amount;

	/**
	 * The duration of the loan or credit agreement.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $loanTerm;

	/**
	 * Assets required to secure loan or credit repayments.
	 * It may take form of third party pledge, goods, financial instruments (cash, securities, etc.)
	 * @access  public
	 * @var     string|\Org\Schema\Thing
	 */
	public $requiredCollateral;

	/**
	 * LoanOrCredit constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LoanOrCredit toString.
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
	 * LoanOrCredit destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>