<?php

namespace Org\Schema\Thing\Event;

/**
 * Class FoodEvent.
 * Event type: Food event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        FoodEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/FoodEvent
 * Date         04/03/2017
 */
class FoodEvent extends \Org\Schema\Thing\Event
{

	/**
	 * FoodEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * FoodEvent toString.
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
	 * FoodEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>