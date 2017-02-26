<?php

namespace Org\Schema\Thing\Action\InteractAction\CommunicateAction;

/**
 * CommentAction Class.
 * The act of generating a comment about a subject.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CommentAction
 * @namespace   Org\Schema\Thing\Action\InteractAction\CommunicateAction
 * @package		Org\Schema
 * @see			https://schema.org/CommentAction
 * Date         26/02/2017
 */
class CommentAction extends \Org\Schema\Thing\Action\InteractAction\CommunicateAction
{

	/**
	 * A sub property of result. The Comment created or sent as a result of this action.
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\Comment
	 */
	public $resultComment;

	/**
	 * CommentAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CommentAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>