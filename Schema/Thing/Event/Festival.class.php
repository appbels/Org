<?php

namespace Org\Schema\Thing\Event;

/**
 * Class Festival.
 * Event type: Festival.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Festival
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/Festival
 * Date         04/03/2017
 */
class Festival extends \Org\Schema\Thing\Event
{

	/**
	 * Festival constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Festival toString.
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
	 * Festival destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>