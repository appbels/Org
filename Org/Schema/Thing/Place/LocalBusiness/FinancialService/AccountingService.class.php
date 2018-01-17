<?php

namespace Org\Schema\Thing\Place\LocalBusiness\FinancialService;

/**
 * Class AccountingService
 * Accountancy business.
 * As a LocalBusiness it can be described as a provider of one or more Service(s).
 * @author      AppBels <app.bels@gmail.com>
 * @name        AccountingService
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\FinancialService
 * @package     Org\Schema
 * @see         https://schema.org/AccountingService
 * Date         03/04/2017
 */
class AccountingService extends \Org\Schema\Thing\Place\LocalBusiness\FinancialService
{

	/**
	 * AccountingService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\FinancialService::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AccountingService toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\FinancialService::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * AccountingService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\FinancialService::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>