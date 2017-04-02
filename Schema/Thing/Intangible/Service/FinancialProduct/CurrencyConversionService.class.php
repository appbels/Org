<?php

namespace Org\Schema\Thing\Intangible\Service\FinancialProduct;

/**
 * Class CurrencyConversionService
 * A service to convert funds from one currency to another currency.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CurrencyConversionService
 * @namespace   Org\Schema\Thing\Intangible\Service\FinancialProduct
 * @package     Org\Schema
 * @see         https://schema.org/CurrencyConversionService
 * Date         02/04/2017
 */
class CurrencyConversionService extends \Org\Schema\Thing\Intangible\Service\FinancialProduct
{

	/**
	 * CurrencyConversionService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CurrencyConversionService toString.
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
	 * CurrencyConversionService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>