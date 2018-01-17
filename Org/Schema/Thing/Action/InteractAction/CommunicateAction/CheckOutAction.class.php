<?php

namespace Org\Schema\Thing\Action\InteractAction\CommunicateAction;

/**
 * CheckOutAction Class.
 * The act of an agent communicating (service provider, social media, etc) their departure of a previously reserved service (e.g. flight check in) or place (e.g. hotel).
 * Related actions:
 * 		CheckInAction: The antonym of CheckOutAction.
 *      DepartAction: Unlike DepartAction, CheckOutAction implies that the agent is informing/confirming the end of a
 * 					  previously reserved service.
 *      CancelAction: Unlike CancelAction, CheckOutAction implies that the agent is informing/confirming the end of a
 * 					  previously reserved service.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CheckOutAction
 * @namespace   Org\Schema\Thing\Action\InteractAction\CommunicateAction
 * @package		Org\Schema
 * @see			https://schema.org/CheckOutAction
 * Date         26/02/2017
 */
class CheckOutAction extends \Org\Schema\Thing\Action\InteractAction\CommunicateAction
{

	/**
	 * CheckOutAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CheckOutAction toString.
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
	 * CheckOutAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>