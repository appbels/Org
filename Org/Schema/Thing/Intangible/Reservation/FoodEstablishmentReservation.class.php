<?php

namespace Org\Schema\Thing\Intangible\Reservation;

/**
 * Class FoodEstablishmentReservation
 * A reservation to dine at a food-related business.
 * Note: This type is for information about actual reservations,
 * e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        FoodEstablishmentReservation
 * @namespace   Org\Schema\Thing\Intangible\Reservation
 * @package     Org\Schema
 * @see         https://schema.org/FoodEstablishmentReservation
 * Date         30/03/2017
 */
class FoodEstablishmentReservation extends \Org\Schema\Thing\Intangible\Reservation
{

	/**
	 * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation),
	 * the time that it is expected to end. For actions that span a period of time, when the action was performed.
	 * e.g. John wrote a book from January to December.
	 * Note that Event uses startDate/endDate instead of startTime/endTime,
	 * even when describing dates with times.
	 * This situation may be clarified in future revisions.
	 * @access	public
	 * @var		string
	 */
	public $endTime;

	/**
	 * Number of people the reservation should accommodate.
	 * @access	public
	 * @var		int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $partySize;

	/**
	 * The startTime of something.
	 * For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start.
	 * For actions that span a period of time, when the action was performed.
	 * e.g. John wrote a book from January to December.
	 * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times.
	 * This situation may be clarified in future revisions.
	 * @access	public
	 * @var		string
	 */
	public $startTime;

	/**
	 * FoodEstablishmentReservation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * FoodEstablishmentReservation toString.
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
	 * FoodEstablishmentReservation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>