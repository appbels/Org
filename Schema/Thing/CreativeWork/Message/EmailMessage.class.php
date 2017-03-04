<?php

namespace Org\Schema\Thing\CreativeWork\Message;

/**
 * Class EmailMessage.
 * An email message.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EmailMessage
 * @namespace   Org\Schema\Thing\CreativeWork\Message
 * @package     Org\Schema
 * @see         https://schema.org/EmailMessage
 * Date         04/03/2017
 */
class EmailMessage extends \Org\Schema\Thing\CreativeWork\Message
{

	/**
	 * EmailMessage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Message::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EmailMessage toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Message::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * EmailMessage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Message::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>