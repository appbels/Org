<?php

namespace Org\Schema\Thing\Event;

/**
 * Class DanceEvent.
 * Event type: A social dance.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DanceEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/DanceEvent
 * Date         04/03/2017
 */
class DanceEvent extends \Org\Schema\Thing\Event
{

	/**
	 * DanceEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DanceEvent toString.
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
	 * DanceEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>