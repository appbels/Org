<?php

namespace Org\Schema\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

/**
 * Class CreditCard.
 * A card payment method of a particular brand or name. Used to mark up a particular payment
 * method and/or the financial product/service that supplies the card account.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CreditCard
 * @namespace   Org\Schema\Thing\Intangible\Service\FinancialProduct\LoanOrCredit
 * @package     Org\Schema
 * @see         https://schema.org/CreditCard
 * Date         12/03/2017
 */
class CreditCard extends \Org\Schema\Thing\Intangible\Service\FinancialProduct\LoanOrCredit
{

	/**
	 * Payment by credit or debit cards issued by the American Express network.
	 * @see     http://purl.org/goodrelations/v1#AmericanExpress
	 * @var     string
	 */
	const AmericanExpress = "http://purl.org/goodrelations/v1#AmericanExpress";

	/**
	 * Payment by credit or debit cards issued by the Diner's Club network.
	 * @see     http://purl.org/goodrelations/v1#DinersClub
	 * @var     string
	 */
	const DinersClub = "http://purl.org/goodrelations/v1#DinersClub";

	/**
	 * Payment by credit or debit cards issued by the Discover network.
	 * @see     http://purl.org/goodrelations/v1#Discover
	 * @var     string
	 */
	const Discover = "http://purl.org/goodrelations/v1#Discover";

	/**
	 * Payment by credit or debit cards issued by the JCB network.
	 * @see     http://purl.org/goodrelations/v1#JCB
	 * @var     string
	 */
	const JCB = "http://purl.org/goodrelations/v1#JCB";

	/**
	 * Payment by credit or debit cards issued by the MasterCard network.
	 * @see     http://purl.org/goodrelations/v1#MasterCard
	 * @var     string
	 */
	const MasterCard = "http://purl.org/goodrelations/v1#MasterCard";

	/**
	 * Payment by credit or debit cards issued by the VISA network.
	 * @see     http://purl.org/goodrelations/v1#VISA
	 * @var     string
	 */
	const VISA = "http://purl.org/goodrelations/v1#VISA";

	/**
	 * CreditCard constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct\LoanOrCredit::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CreditCard toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct\LoanOrCredit::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * CreditCard destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service\FinancialProduct\LoanOrCredit::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>