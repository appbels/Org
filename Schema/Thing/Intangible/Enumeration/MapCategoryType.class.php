<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class MapCategoryType.
 * An enumeration of several kinds of Map.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MapCategoryType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/MapCategoryType
 * Date         12/03/2017
 */
class MapCategoryType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * A parking map.
	 * @see     https://schema.org/ParkingMap
	 * @var     string
	 */
	const ParkingMap = "https://schema.org/ParkingMap";

	/**
	 * A seating map.
	 * @see     https://schema.org/SeatingMap
	 * @var     string
	 */
	const SeatingMap = "https://schema.org/SeatingMap";

	/**
	 * A transit map.
	 * @see     https://schema.org/TransitMap
	 * @var     string
	 */
	const TransitMap = "https://schema.org/TransitMap";

	/**
	 * A venue map (e.g. for malls, auditoriums, museums, etc.).
	 * @see     https://schema.org/VenueMap
	 * @var     string
	 */
	const VenueMap = "https://schema.org/VenueMap";

	/**
	 * MapCategoryType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MapCategoryType toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MapCategoryType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>