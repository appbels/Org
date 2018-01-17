<?php

namespace Org\Schema\Thing\Action\TransferAction;

/**
 * Class GiveAction.
 * The act of transferring ownership of an object to a destination. Reciprocal of TakeAction.
 * Related actions:
 *      TakeAction: Reciprocal of GiveAction.
 *      SendAction: Unlike SendAction, GiveAction implies that ownership is being transferred
 *                  (e.g. I may send my laptop to you, but that doesn't mean I'm giving it to you).
 * @author      AppBels <app.bels@gmail.com>
 * @name        GiveAction
 * @namespace   Org\Schema\Thing\Action\TransferAction
 * @package     Org\Schema
 * @see         https://schema.org/GiveAction
 * Date         28/02/2017
 */
class GiveAction extends \Org\Schema\Thing\Action\TransferAction
{

	/**
	 * A sub property of participant.
	 * The participant who is at the receiving end of the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person|\Org\Schema\Thing\Intangible\Audience
	 */
	public $recipient;

	/**
	 * GiveAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GiveAction toString.
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
	 * GiveAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>