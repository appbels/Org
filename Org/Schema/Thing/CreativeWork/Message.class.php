<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Message.
 * A single message from a sender to one or more organizations or people.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Message
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Message
 * Date         04/03/2017
 */
class Message extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The date/time at which the message has been read by the recipient if a single recipient exists.
	 * @access  public
	 * @var     string
	 */
	public $dateRead;

	/**
	 * The date/time the message was received if a single recipient exists.
	 * @access  public
	 * @var     string
	 */
	public $dateReceived;

	/**
	 * The date/time at which the message was sent.
	 * @access  public
	 * @var     string
	 */
	public $dateSent;

	/**
	 * A CreativeWork attached to the message.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $messageAttachment;

	/**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Audience|\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $recipient;

	/**
	 * A sub property of participant. The participant who is at the sending end of the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Audience|\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $sender;

	/**
	 * Message constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Message toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Message destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>