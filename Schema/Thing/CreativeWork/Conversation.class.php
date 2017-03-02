<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Conversation.
 * One or more messages between organizations or people on a particular topic.
 * Individual messages can be linked to the conversation with isPartOf or hasPart properties.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Conversation
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Conversation
 * Date         02/03/2017
 */
class Conversation extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * Conversation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Conversation toString.
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
	 * Conversation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>