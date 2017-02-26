<?php

namespace Org\Schema\Thing\Action\InteractAction;

/**
 * FollowAction Class.
 * The act of forming a personal connection with someone/something (object) unidirectionally/asymmetrically to
 * get updates polled from.
 * Related actions:
 * 		BefriendAction: Unlike BefriendAction, FollowAction implies that the connection is not necessarily reciprocal.
 *      SubscribeAction: Unlike SubscribeAction, FollowAction implies that the follower acts as an active
 * 						 agent constantly/actively polling for updates.
 *      RegisterAction: Unlike RegisterAction, FollowAction implies that the agent is interested in continuing
 * 						receiving updates from the object.
 * 		JoinAction: Unlike JoinAction, FollowAction implies that the agent is interested in getting updates from the object.
 *      TrackAction: Unlike TrackAction, FollowAction refers to the polling of updates of all aspects of animate
 * 					 objects rather than the location of inanimate objects (e.g. you track a package, but you don't follow it).
 * @author      AppBels <app.bels@gmail.com>
 * @name        FollowAction
 * @namespace   Org\Schema\Thing\Action\InteractAction
 * @package		Org\Schema
 * @see			https://schema.org/FollowAction
 * Date         26/02/2017
 */
class FollowAction extends \Org\Schema\Thing\Action\InteractAction
{

	/**
	 * A sub property of object. The person or organization being followed.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $followee;

	/**
	 * FollowAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * FollowAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>