<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class EventVenue
 * An event venue.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EventVenue
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/EventVenue
 * Date         10/04/2017
 */
class EventVenue extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * EventVenue constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EventVenue toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * EventVenue destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>