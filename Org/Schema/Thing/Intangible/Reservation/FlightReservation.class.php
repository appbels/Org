<?php

namespace Org\Schema\Thing\Intangible\Reservation;

/**
 * Class FlightReservation
 * A reservation for air travel.
 * Note: This type is for information about actual reservations,
 * e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 * For offers of tickets, use Offer.
 * @author      AppBels <app.bels@gmail.com>
 * @name        FlightReservation
 * @namespace   Org\Schema\Thing\Intangible\Reservation
 * @package     Org\Schema
 * @see         https://schema.org/FlightReservation
 * Date         30/03/2017
 */
class FlightReservation extends \Org\Schema\Thing\Intangible\Reservation
{

	/**
	 * The airline-specific indicator of boarding order / preference.
	 * @access	public
	 * @var		string
	 */
	public $boardingGroup;

	/**
	 * The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 * @var		string
	 */
	public $passengerPriorityStatus;

	/**
	 * The passenger's sequence number as assigned by the airline.
	 * @access	public
	 * @var		string
	 */
	public $passengerSequenceNumber;

	/**
	 * The type of security screening the passenger is subject to.
	 * @access	public
	 * @var		string
	 */
	public $securityScreening;

	/**
	 * FlightReservation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * FlightReservation toString.
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
	 * FlightReservation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>