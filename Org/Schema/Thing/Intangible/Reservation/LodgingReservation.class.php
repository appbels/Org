<?php

namespace Org\Schema\Thing\Intangible\Reservation;

/**
 * Class LodgingReservation
 * A reservation for lodging at a hotel, motel, inn, etc.
 * Note: This type is for information about actual reservations,
 * e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LodgingReservation
 * @namespace   Org\Schema\Thing\Intangible\Reservation
 * @package     Org\Schema
 * @see         https://schema.org/LodgingReservation
 * Date         30/03/2017
 */
class LodgingReservation extends \Org\Schema\Thing\Intangible\Reservation
{

	/**
	 * The earliest someone may check into a lodging establishment.
	 * @access	public
	 * @var		string
	 */
	public $checkinTime;

	/**
	 * The latest someone may check out of a lodging establishment.
	 * @access	public
	 * @var		string
	 */
	public $checkoutTime;

	/**
	 * A full description of the lodging unit.
	 * @access	public
	 * @var		string
	 */
	public $lodgingUnitDescription;

	/**
	 * Textual description of the unit type (including suite vs. room, size of bed, etc.).
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 * @var		string
	 */
	public $lodgingUnitType;

	/**
	 * The number of adults staying in the unit.
	 * @access	public
	 * @var		int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $numAdults;

	/**
	 * The number of children staying in the unit.
	 * @access	public
	 * @var		int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $numChildren;

	/**
	 * LodgingReservation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LodgingReservation toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * LodgingReservation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>