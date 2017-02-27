<?php

namespace Org\Schema\Thing\Action\TradeAction;

/**
 * Class DonateAction.
 * The act of providing goods, services, or money without compensation, often for philanthropic reasons.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DonateAction
 * @namespace   Org\Schema\Thing\Action\TradeAction
 * @package     Org\Schema
 * @see         https://schema.org/DonateAction
 * Date         27/02/2017
 */
class DonateAction extends \Org\Schema\Thing\Action\TradeAction
{

	/**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Audience|\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $recipient;

	/**
	 * DonateAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DonateAction toString.
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
	 * DonateAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>