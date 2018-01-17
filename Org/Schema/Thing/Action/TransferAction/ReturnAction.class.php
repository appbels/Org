<?php

namespace Org\Schema\Thing\Action\TransferAction;

/**
 * Class ReturnAction.
 * The act of returning to the origin that which was previously received (concrete objects) or taken (ownership).
 * @author      AppBels <app.bels@gmail.com>
 * @name        ReturnAction
 * @namespace   Org\Schema\Thing\Action\TransferAction
 * @package     Org\Schema
 * @see         https://schema.org/ReturnAction
 * Date         28/02/2017
 */
class ReturnAction extends \Org\Schema\Thing\Action\TransferAction
{

	/**
	 * A sub property of participant.
	 * The participant who is at the receiving end of the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person|\Org\Schema\Thing\Intangible\Audience
	 */
	public $recipient;

	/**
	 * ReturnAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ReturnAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ReturnAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>