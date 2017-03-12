<?php

namespace Org\Schema\Thing\Intangible\Enumeration\PaymentMethod\PaymentCard;

/**
 * Class CreditCard.
 * A card payment method of a particular brand or name.
 * Used to mark up a particular payment method and/or the financial product/service that supplies the card account.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CreditCard
 * @namespace   Org\Schema\Thing\Intangible\Enumeration\PaymentMethod\PaymentCard
 * @package     Org\Schema
 * @see         https://schema.org/CreditCard
 * Date         12/03/2017
 */
class CreditCard extends \Org\Schema\Thing\Intangible\Enumeration\PaymentMethod\PaymentCard
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

	###################################################################
	##                                                               ##
	## LoanOrCredit properties                                       ##
	##                                                               ##
	###################################################################
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
	 * CreditCard constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\PaymentMethod\PaymentCard::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CreditCard toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\PaymentMethod\PaymentCard::__toString()
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
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\PaymentMethod\PaymentCard::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>