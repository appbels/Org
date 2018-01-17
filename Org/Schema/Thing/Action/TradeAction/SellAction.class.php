<?php

namespace Org\Schema\Thing\Action\TradeAction;

/**
 * Class SellAction.
 * The act of taking money from a buyer in exchange for goods or services rendered.
 * An agent sells an object, product, or service to a buyer for a price. Reciprocal of BuyAction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SellAction
 * @namespace   Org\Schema\Thing\Action\TradeAction
 * @package     Org\Schema
 * @see         https://schema.org/SellAction
 * Date         27/02/2017
 */
class SellAction extends \Org\Schema\Thing\Action\TradeAction
{

	/**
	 * A sub property of participant. The participant/person/organization that bought the object.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $buyer;

	/**
	 * SellAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SellAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SellAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>