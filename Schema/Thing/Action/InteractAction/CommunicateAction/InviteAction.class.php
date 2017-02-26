<?php

namespace Org\Schema\Thing\Action\InteractAction\CommunicateAction;

/**
 * InviteAction Class.
 * The act of asking someone to attend an event. Reciprocal of RsvpAction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        InviteAction
 * @namespace   Org\Schema\Thing\Action\InteractAction\CommunicateAction
 * @package		Org\Schema
 * @see			https://schema.org/InviteAction
 * Date         26/02/2017
 */
class InviteAction extends \Org\Schema\Thing\Action\InteractAction\CommunicateAction
{

	/**
	 * Upcoming or past event associated with this place, organization, or action.
	 * Supersedes events.
	 * @access	public
	 * @var		\Org\Schema\Thing\Event
	 */
	public $event;

	/**
	 * InviteAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * InviteAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>