<?php

namespace Org\Schema\Thing\Action\TradeAction;

/**
 * Class BuyAction.
 * The act of giving money to a seller in exchange for goods or services rendered.
 * An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BuyAction
 * @namespace   Org\Schema\Thing\Action\TradeAction
 * @package     Org\Schema
 * @see         https://schema.org/BuyAction
 * Date         27/02/2017
 */
class BuyAction extends \Org\Schema\Thing\Action\TradeAction
{

	/**
	 * An entity which offers (sells / leases / lends / loans) the services / goods.
	 * A seller may also be a provider.
	 * Supersedes merchant, vendor.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $seller;

	/**
	 * BuyAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BuyAction toString.
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
	 * BuyAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>