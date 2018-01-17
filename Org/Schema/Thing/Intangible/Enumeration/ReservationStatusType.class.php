<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class ReservationStatusType.
 * Enumerated status values for Reservation.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ReservationStatusType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/ReservationStatusType
 * Date         12/03/2017
 */
class ReservationStatusType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * The status for a previously confirmed reservation that is now cancelled.
	 * @see     https://schema.org/ReservationCancelled
	 * @var     string
	 */
	const ReservationCancelled = "http://schema.org/ReservationCancelled";

	/**
	 * The status of a confirmed reservation.
	 * @see     https://schema.org/ReservationConfirmed
	 * @var     string
	 */
	const ReservationConfirmed = "http://schema.org/ReservationConfirmed";

	/**
	 * The status of a reservation on hold pending an update like credit card number or flight changes.
	 * @see     https://schema.org/ReservationHold
	 * @var     string
	 */
	const ReservationHold = "http://schema.org/ReservationHold";

	/**
	 * The status of a reservation when a request has been sent, but not confirmed.
	 * @see     https://schema.org/ReservationPending
	 * @var     string
	 */
	const ReservationPending = "http://schema.org/ReservationPending";

	/**
	 * ReservationStatusType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ReservationStatusType toString.
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
	 * ReservationStatusType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>