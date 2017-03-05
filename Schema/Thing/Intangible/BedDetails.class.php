<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class BedDetails.
 * An entity holding detailed information about the available bed types,
 * e.g. the quantity of twin beds for a hotel room.
 * For the single case of just one bed of a certain type, you can use bed directly with a text.
 * See also BedType (under development).
 * @author      AppBels <app.bels@gmail.com>
 * @name        BedDetails
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/BedDetails
 * Date         05/03/2017
 */
class BedDetails extends \Org\Schema\Thing\Intangible
{

	/**
	 * The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
	 * @access  public
	 * @var     int
	 */
	public $numberOfBeds;

	/**
	 * The type of bed to which the BedDetail refers,
	 * i.e. the type of bed available in the quantity indicated by quantity.
	 * @access  public
	 * @var     string
	 */
	public $typeOfBed;

	/**
	 * BedDetails constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BedDetails toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * BedDetails destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>