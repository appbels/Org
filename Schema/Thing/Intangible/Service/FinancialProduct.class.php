<?php

namespace Org\Schema\Thing\Intangible\Service;

/**
 * Class FinancialProduct.
 * A product provided to consumers and businesses by financial institutions such as banks, insurance
 * companies, brokerage firms, consumer finance companies, and investment companies which comprise
 * the financial services industry.
 * @author      AppBels <app.bels@gmail.com>
 * @name        FinancialProduct
 * @namespace   Org\Schema\Thing\Intangible\Service
 * @package     Org\Schema
 * @see         https://schema.org/FinancialProduct
 * Date         12/03/2017
 */
class FinancialProduct extends \Org\Schema\Thing\Intangible\Service
{

	/**
	 * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage
	 * number that represents the actual yearly cost of funds over the term of a loan.
	 * This includes any fees or additional costs associated with the transaction.
	 * @access  public
	 * @var     int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $annualPercentageRate;

	/**
	 * Description of fees, commissions, and other terms applied either to a class of
	 * financial product, or by a financial service organization.
	 * @access  public
	 * @var     string
	 */
	public $feesAndCommissionsSpecification;

	/**
	 * The interest rate, charged or paid, applicable to the financial product.
	 * Note: This is different from the calculated annualPercentageRate.
	 * @access  public
	 * @var     int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $interestRate;

	/**
	 * FinancialProduct constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * FinancialProduct toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * FinancialProduct destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>