<?php

namespace Org\Schema\Thing\Event;

/**
 * Class ComedyEvent.
 * Event type: Comedy event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ComedyEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/ComedyEvent
 * Date         04/03/2017
 */
class ComedyEvent extends \Org\Schema\Thing\Event
{

	/**
	 * ComedyEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ComedyEvent toString.
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
	 * ComedyEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>