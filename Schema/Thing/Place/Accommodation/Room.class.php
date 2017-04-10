<?php

namespace Org\Schema\Thing\Place\Accommodation;

/**
 * Class Room
 * A room is a distinguishable space within a structure, usually separated from other spaces by interior walls.
 * (Source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Room).
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Room
 * @namespace   Org\Schema\Thing\Place\Accommodation
 * @package     Org\Schema
 * @see         https://schema.org/Room
 * Date         10/04/2017
 */
class Room extends \Org\Schema\Thing\Place\Accommodation
{

	/**
	 * Room constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Room toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Room destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>