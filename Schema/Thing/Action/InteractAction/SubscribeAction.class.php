<?php

namespace Org\Schema\Thing\Action\InteractAction;

/**
 * SubscribeAction Class.
 * The act of forming a personal connection with someone/something (object) unidirectionally/asymmetrically to get updates pushed to.
 * Related actions:
 *      FollowAction: Unlike FollowAction, SubscribeAction implies that the subscriber acts as a passive agent being
 * 					  constantly/actively pushed for updates.
 *      RegisterAction: Unlike RegisterAction, SubscribeAction implies that the agent is interested in continuing
 * 						receiving updates from the object.
 *      JoinAction: Unlike JoinAction, SubscribeAction implies that the agent is interested in continuing receiving
 * 					updates from the object.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SubscribeAction
 * @namespace   Org\Schema\Thing\Action\InteractAction
 * @package		Org\Schema
 * @see			https://schema.org/SubscribeAction
 * Date         26/02/2017
 */
class SubscribeAction extends \Org\Schema\Thing\Action\InteractAction
{

	/**
	 * SubscribeAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SubscribeAction toString.
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
	 * SubscribeAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>