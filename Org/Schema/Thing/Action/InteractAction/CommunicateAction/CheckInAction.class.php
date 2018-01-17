<?php

namespace Org\Schema\Thing\Action\InteractAction\CommunicateAction;

/**
 * CheckInAction Class.
 * The act of an agent communicating (service provider, social media, etc) their arrival by registering/confirming for
 * a previously reserved service (e.g. flight check in) or at a place (e.g. hotel), possibly resulting in a result
 * (boarding pass, etc).
 * Related actions:
 * 		CheckOutAction: The antonym of CheckInAction.
 *      ArriveAction: Unlike ArriveAction, CheckInAction implies that the agent is informing/confirming the start of
 * 					  a previously reserved service.
 *      ConfirmAction: Unlike ConfirmAction, CheckInAction implies that the agent is informing/confirming the start of
 * 					   a previously reserved service rather than its validity/existence.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CheckInAction
 * @namespace   Org\Schema\Thing\Action\InteractAction\CommunicateAction
 * @package		Org\Schema
 * @see			https://schema.org/CheckInAction
 * Date         26/02/2017
 */
class CheckInAction extends \Org\Schema\Thing\Action\InteractAction\CommunicateAction
{

	/**
	 * CheckInAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CheckInAction toString.
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
	 * CheckInAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>