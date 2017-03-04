<?php

namespace Org\Schema\Thing\Event;

/**
 * Class SaleEvent.
 * Event type: Sales event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SaleEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/SaleEvent
 * Date         04/03/2017
 */
class SaleEvent extends \Org\Schema\Thing\Event
{

	/**
	 * SaleEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SaleEvent toString.
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
	 * SaleEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>