<?php

namespace Org\Schema\Thing\Event;

/**
 * Class EducationEvent.
 * Event type: Education event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EducationEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/EducationEvent
 * Date         04/03/2017
 */
class EducationEvent extends \Org\Schema\Thing\Event
{

	/**
	 * EducationEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EducationEvent toString.
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
	 * EducationEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>