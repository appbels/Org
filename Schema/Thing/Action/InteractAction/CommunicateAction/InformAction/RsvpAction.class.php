<?php

namespace Org\Schema\Thing\Action\InteractAction\CommunicateAction\InformAction;

/**
 * RsvpAction Class.
 * The act of notifying an event organizer as to whether you expect to attend the event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RsvpAction
 * @namespace   Org\Schema\Thing\Action\InteractAction\CommunicateAction\InformAction
 * @package		Org\Schema
 * @see			https://schema.org/RsvpAction
 * Date         26/02/2017
 */
class RsvpAction extends \Org\Schema\Thing\Action\InteractAction\CommunicateAction\InformAction
{

	/**
	 * If responding yes, the number of guests who will attend in addition to the invitee.
	 * @access	public
	 * @var		int
	 */
	public $additionalNumberOfGuests;

	/**
	 * Comments, typically from users.
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\Comment
	 */
	public $comment;

	/**
	 * The response (yes, no, maybe) to the RSVP.
	 * One constant of \Org\Schema\Thing\Intangible\Enumeration\RsvpResponseType
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\RsvpResponseType
	 * @var		string
	 */
	public $rsvpResponse;

	/**
	 * RsvpAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction\InformAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RsvpAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\InteractAction\CommunicateAction\InformAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * RsvpAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction\InformAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>