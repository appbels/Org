<?php

namespace Org\Schema\Thing\Event;

/**
 * Class LiteraryEvent.
 * Event type: Literary event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LiteraryEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/LiteraryEvent
 * Date         04/03/2017
 */
class LiteraryEvent extends \Org\Schema\Thing\Event
{

	/**
	 * LiteraryEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LiteraryEvent toString.
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
	 * LiteraryEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>