<?php

namespace Org\Schema\Thing\Action\InteractAction\CommunicateAction;

/**
 * AskAction Class.
 * The act of posing a question / favor to someone.
 * Related actions:
 * 		ReplyAction: Appears generally as a response to AskAction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AskAction
 * @namespace   Org\Schema\Thing\Action\InteractAction\CommunicateAction
 * @package		Org\Schema
 * @see			https://schema.org/AskAction
 * Date         26/02/2017
 */
class AskAction extends \Org\Schema\Thing\Action\InteractAction\CommunicateAction
{

	/**
	 * A sub property of object. A question.
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\Question
	 */
	public $question;

	/**
	 * AskAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AskAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\InteractAction\CommunicateAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * AskAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>