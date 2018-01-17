<?php

namespace Org\Schema\Thing\Action\InteractAction\CommunicateAction;

/**
 * InformAction Class.
 * The act of notifying someone of information pertinent to them, with no expectation of a response.
 * @author      AppBels <app.bels@gmail.com>
 * @name        InformAction
 * @namespace   Org\Schema\Thing\Action\InteractAction\CommunicateAction
 * @package		Org\Schema
 * @see			https://schema.org/InformAction
 * Date         26/02/2017
 */
class InformAction extends \Org\Schema\Thing\Action\InteractAction\CommunicateAction
{

	/**
	 * Upcoming or past event associated with this place, organization, or action.
	 * Supersedes events.
	 * @access	public
	 * @var		\Org\Schema\Thing\Event
	 */
	public $event;

	/**
	 * InformAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * InformAction toString.
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
	 * InformAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>