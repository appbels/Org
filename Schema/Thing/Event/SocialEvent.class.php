<?php

namespace Org\Schema\Thing\Event;

/**
 * Class SocialEvent.
 * Event type: Social event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SocialEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/SocialEvent
 * Date         04/03/2017
 */
class SocialEvent extends \Org\Schema\Thing\Event
{

	/**
	 * SocialEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SocialEvent toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SocialEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>