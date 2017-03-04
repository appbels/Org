<?php

namespace Org\Schema\Thing\Event;

/**
 * Class TheaterEvent.
 * Event type: Theater performance.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TheaterEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/TheaterEvent
 * Date         04/03/2017
 */
class TheaterEvent extends \Org\Schema\Thing\Event
{

	/**
	 * TheaterEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TheaterEvent toString.
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
	 * TheaterEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>