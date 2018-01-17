<?php

namespace Org\Schema\Thing\Action\InteractAction;

/**
 * RegisterAction Class.
 * The act of registering to be a user of a service, product or web page.
 * Related actions:
 * 		JoinAction: Unlike JoinAction, RegisterAction implies you are registering to be a user of a service, not a group/team of people.
 * 		FollowAction: Unlike FollowAction, RegisterAction doesn't imply that the agent is expecting to poll for updates from the object.
 * 		SubscribeAction: Unlike SubscribeAction, RegisterAction doesn't imply that the agent is expecting updates from the object.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RegisterAction
 * @namespace   Org\Schema\Thing\Action\InteractAction
 * @package		Org\Schema
 * @see			https://schema.org/RegisterAction
 * Date         26/02/2017
 */
class RegisterAction extends \Org\Schema\Thing\Action\InteractAction
{

	/**
	 * RegisterAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RegisterAction toString.
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
	 * RegisterAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>