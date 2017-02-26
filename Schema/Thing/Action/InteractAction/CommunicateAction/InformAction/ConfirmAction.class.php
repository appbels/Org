<?php

namespace Org\Schema\Thing\Action\InteractAction\CommunicateAction\InformAction;

/**
 * ConfirmAction Class.
 * The act of notifying someone that a future event/action is going to happen as expected.
 * Related actions:
 * 		CancelAction: The antonym of ConfirmAction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ConfirmAction
 * @namespace   Org\Schema\Thing\Action\InteractAction\CommunicateAction\InformAction
 * @package		Org\Schema
 * @see			https://schema.org/ConfirmAction
 * Date         26/02/2017
 */
class ConfirmAction extends \Org\Schema\Thing\Action\InteractAction\CommunicateAction\InformAction
{

	/**
	 * ConfirmAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction\InformAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ConfirmAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction\InformAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>