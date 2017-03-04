<?php

namespace Org\Schema\Thing\Event;

/**
 * Class ChildrensEvent.
 * Event type: Children's event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ChildrensEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/ChildrensEvent
 * Date         04/03/2017
 */
class ChildrensEvent extends \Org\Schema\Thing\Event
{

	/**
	 * ChildrensEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ChildrensEvent toString.
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
	 * ChildrensEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>