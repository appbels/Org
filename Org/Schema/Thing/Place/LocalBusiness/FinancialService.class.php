<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class FinancialService
 * Financial services business.
 * @author      AppBels <app.bels@gmail.com>
 * @name        FinancialService
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/FinancialService
 * Date         03/04/2017
 */
class FinancialService extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * Description of fees, commissions, and other terms applied either
	 * to a class of financial product, or by a financial service organization.
	 * @access	public
	 * @var		string
	 */
	public $feesAndCommissionsSpecification;

	/**
	 * FinancialService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * FinancialService toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * FinancialService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>