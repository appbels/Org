<?php

namespace Org\Schema\Thing\Event;

/**
 * Class BusinessEvent.
 * Event type: Business event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BusinessEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/BusinessEvent
 * Date         04/03/2017
 */
class BusinessEvent extends \Org\Schema\Thing\Event
{

	/**
	 * BusinessEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BusinessEvent toString.
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
	 * BusinessEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>