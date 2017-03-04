<?php

namespace Org\Schema\Thing\Event;

/**
 * Class MusicEvent.
 * Event type: Music event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/MusicEvent
 * Date         04/03/2017
 */
class MusicEvent extends \Org\Schema\Thing\Event
{

	/**
	 * MusicEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicEvent toString.
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
	 * MusicEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>