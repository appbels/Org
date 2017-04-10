<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class MusicVenue
 * A music venue.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicVenue
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/MusicVenue
 * Date         10/04/2017
 */
class MusicVenue extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * MusicVenue constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicVenue toString.
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
	 * MusicVenue destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>