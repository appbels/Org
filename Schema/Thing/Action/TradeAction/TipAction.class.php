<?php

namespace Org\Schema\Thing\Action\TradeAction;

/**
 * Class TipAction.
 * The act of giving money voluntarily to a beneficiary in recognition of services rendered.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TipAction
 * @namespace   Org\Schema\Thing\Action\TradeAction
 * @package     Org\Schema
 * @see         https://schema.org/TipAction
 * Date         27/02/2017
 */
class TipAction extends \Org\Schema\Thing\Action\TradeAction
{

	/**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Audience|\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $recipient;

	/**
	 * TipAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TipAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>