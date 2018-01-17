<?php

namespace Org\Schema\Thing\Action\TradeAction;

/**
 * Class PayAction.
 * An agent pays a price to a participant.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PayAction
 * @namespace   Org\Schema\Thing\Action\TradeAction
 * @package     Org\Schema
 * @see         https://schema.org/PayAction
 * Date         27/02/2017
 */
class PayAction extends \Org\Schema\Thing\Action\TradeAction
{

	/**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Audience|\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $recipient;

	/**
	 * PayAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PayAction toString.
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
	 * PayAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>