<?php

namespace Org\Schema\Thing\Action\InteractAction;

/**
 * LeaveAction Class.
 * An agent leaves an event / group with participants/friends at a location.
 * Related actions:
 * 		JoinAction: The antonym of LeaveAction.
 * 		UnRegisterAction: Unlike UnRegisterAction, LeaveAction implies leaving a group/team of people rather than a service.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LeaveAction
 * @namespace   Org\Schema\Thing\Action\InteractAction
 * @package		Org\Schema
 * @see			https://schema.org/LeaveAction
 * Date         26/02/2017
 */
class LeaveAction extends \Org\Schema\Thing\Action\InteractAction
{

	/**
	 * Upcoming or past event associated with this place, organization, or action.
	 * Supersedes events.
	 * @access	public
	 * @var		\Org\Schema\Thing\Event
	 */
	public $event;

	/**
	 * LeaveAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LeaveAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\InteractAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * LeaveAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>