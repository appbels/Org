<?php

namespace Org\Schema\Thing\Intangible\Reservation;

/**
 * Class TaxiReservation
 * A reservation for a taxi.
 * Note: This type is for information about actual reservations,
 * e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 * For offers of tickets, use Offer.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TaxiReservation
 * @namespace   Org\Schema\Thing\Intangible\Reservation
 * @package     Org\Schema
 * @see         https://schema.org/TaxiReservation
 * Date         30/03/2017
 */
class TaxiReservation extends \Org\Schema\Thing\Intangible\Reservation
{

	/**
	 * Number of people the reservation should accommodate.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 * @var		int|string
	 */
	public $partySize;

	/**
	 * Where a taxi will pick up a passenger or a rental car can be picked up.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place
	 */
	public $pickupLocation;

	/**
	 * When a taxi will pickup a passenger or a rental car can be picked up.
	 * @access	public
	 * @var		string
	 */
	public $pickupTime;

	/**
	 * TaxiReservation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TaxiReservation toString.
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
	 * TaxiReservation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>