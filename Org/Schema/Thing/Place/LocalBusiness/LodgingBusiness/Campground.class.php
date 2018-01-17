<?php

namespace Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness;

/**
 * Class Campground
 * A camping site, campsite, or campground is a place used for overnight stay in the outdoors.
 * In British English a campsite is an area, usually divided into a number of pitches, where people
 * can camp overnight using tents or camper vans or caravans; this British English use of the word
 * is synonymous with the American English expression campground.
 * In American English the term campsite generally means an area where an individual, family, group, or military
 * unit can pitch a tent or parks a camper; a campground may contain many campsites
 * (Source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Campsite).
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Campground
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness
 * @package     Org\Schema
 * @see         https://schema.org/Campground
 * Date         09/04/2017
 */
class Campground extends \Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness
{

	/**
	 * Campground constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Campground toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Campground destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>