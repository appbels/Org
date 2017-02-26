<?php

namespace Org\Schema\Thing\Action\InteractAction;

/**
 * UnRegisterAction Class.
 * The act of un-registering from a service.
 * Related actions:
 * 		RegisterAction: antonym of UnRegisterAction.
 *      Leave: Unlike LeaveAction, UnRegisterAction implies that you are unregistering from a service you werer previously
 * 			   registered, rather than leaving a team/group of people.
 * @author      AppBels <app.bels@gmail.com>
 * @name        UnRegisterAction
 * @namespace   Org\Schema\Thing\Action\InteractAction
 * @package		Org\Schema
 * @see			https://schema.org/UnRegisterAction
 * Date         26/02/2017
 */
class UnRegisterAction extends \Org\Schema\Thing\Action\InteractAction
{

	/**
	 * UnRegisterAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * UnRegisterAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>