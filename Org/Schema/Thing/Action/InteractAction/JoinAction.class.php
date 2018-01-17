<?php

namespace Org\Schema\Thing\Action\InteractAction;

/**
 * JoinAction Class.
 * An agent joins an event/group with participants/friends at a location.
 * Related actions:
 * 		RegisterAction: Unlike RegisterAction, JoinAction refers to joining a group/team of people.
 * 		SubscribeAction: Unlike SubscribeAction, JoinAction does not imply that you'll be receiving updates.
 * 		FollowAction: Unlike FollowAction, JoinAction does not imply that you'll be polling for updates.
 * @author      AppBels <app.bels@gmail.com>
 * @name        JoinAction
 * @namespace   Org\Schema\Thing\Action\InteractAction
 * @package		Org\Schema
 * @see			https://schema.org/JoinAction
 * Date         26/02/2017
 */
class JoinAction extends \Org\Schema\Thing\Action\InteractAction
{

	/**
	 * Upcoming or past event associated with this place, organization, or action.
	 * Supersedes events.
	 * @access	public
	 * @var		\Org\Schema\Thing\Event
	 */
	public $event;

	/**
	 * JoinAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * JoinAction toString.
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
	 * JoinAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>