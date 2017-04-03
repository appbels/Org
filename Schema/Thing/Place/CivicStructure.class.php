<?php

namespace Org\Schema\Thing\Place;

/**
 * Class CivicStructure
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        CivicStructure
 * @namespace   Org\Schema\Thing\Place
 * @package     Org\Schema
 * @see         https://schema.org/CivicStructure
 * Date         03/04/2017
 */
class CivicStructure extends \Org\Schema\Thing\Place
{

	/**
	 * The general opening hours for a business.
	 * Opening hours can be specified as a weekly time range, starting with days, then times per day.
	 * Multiple days can be listed with commas ',' separating each day.
	 * Day or time ranges are specified using a hyphen '-'.
	 * Days are specified using the following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.
	 * Times are specified using 24:00 time.
	 * For example, 3pm is specified as 15:00.
	 * Here is an example:
	 * <time itemprop="openingHours" datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>.
	 * If a business is open 7 days a week, then it can be specified as
	 * <time itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all day</time>.
	 * @access	public
	 * @var		string
	 */
	public $openingHours;

	/**
	 * CivicStructure constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CivicStructure toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * CivicStructure destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>