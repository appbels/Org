<?php

namespace Org\Schema\Thing\Event;

/**
 * Class ExhibitionEvent.
 * Event type: Exhibition event, e.g. at a museum, library, archive, tradeshow, ...
 * @author      AppBels <app.bels@gmail.com>
 * @name        ExhibitionEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/ExhibitionEvent
 * Date         04/03/2017
 */
class ExhibitionEvent extends \Org\Schema\Thing\Event
{

	/**
	 * ExhibitionEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ExhibitionEvent toString.
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
	 * ExhibitionEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>