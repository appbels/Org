<?php

namespace Org\Schema\Thing\Event;

/**
 * Class VisualArtsEvent.
 * Event type: Visual arts event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        VisualArtsEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/VisualArtsEvent
 * Date         04/03/2017
 */
class VisualArtsEvent extends \Org\Schema\Thing\Event
{

	/**
	 * VisualArtsEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * VisualArtsEvent toString.
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
	 * VisualArtsEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>