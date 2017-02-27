<?php

namespace Org\Schema\Thing\Action\TradeAction;

/**
 * Class QuoteAction.
 * An agent quotes/estimates/appraises an object/product/service with a price at a location/store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        QuoteAction
 * @namespace   Org\Schema\Thing\Action\TradeAction
 * @package     Org\Schema
 * @see         https://schema.org/QuoteAction
 * Date         27/02/2017
 */
class QuoteAction extends \Org\Schema\Thing\Action\TradeAction
{

	/**
	 * QuoteAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * QuoteAction toString.
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
	 * QuoteAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>