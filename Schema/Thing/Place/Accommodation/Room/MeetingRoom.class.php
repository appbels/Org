<?php

namespace Org\Schema\Thing\Place\Accommodation\Room;

/**
 * Class MeetingRoom
 * A meeting room, conference room, or conference hall is a room provided for singular events such as business
 * conferences and meetings
 * (Source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Conference_hall).
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MeetingRoom
 * @namespace   Org\Schema\Thing\Place\Accommodation\Room
 * @package     Org\Schema
 * @see         https://schema.org/MeetingRoom
 * Date         10/04/2017
 */
class MeetingRoom extends \Org\Schema\Thing\Place\Accommodation\Room
{

	/**
	 * MeetingRoom constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation\Room::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MeetingRoom toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation\Room::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MeetingRoom destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation\Room::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>