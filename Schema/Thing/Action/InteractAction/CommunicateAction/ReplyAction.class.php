<?php

namespace Org\Schema\Thing\Action\InteractAction\CommunicateAction;

/**
 * ReplyAction Class.
 * The act of responding to a question/message asked/sent by the object. Related to AskAction
 * Related actions:
 * 		AskAction: Appears generally as an origin of a ReplyAction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ReplyAction
 * @namespace   Org\Schema\Thing\Action\InteractAction\CommunicateAction
 * @package		Org\Schema
 * @see			https://schema.org/ReplyAction
 * Date         26/02/2017
 */
class ReplyAction extends \Org\Schema\Thing\Action\InteractAction\CommunicateAction
{

	/**
	 * A sub property of result. The Comment created or sent as a result of this action.
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\Comment
	 */
	public $resultComment;

	/**
	 * ReplyAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ReplyAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>