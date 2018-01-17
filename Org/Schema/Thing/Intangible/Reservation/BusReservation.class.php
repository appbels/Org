<?php

namespace Org\Schema\Thing\Intangible\Reservation;

/**
 * Class BusReservation
 * A reservation for bus travel.
 * Note: This type is for information about actual reservations,
 * e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 * For offers of tickets, use Offer.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BusReservation
 * @namespace   Org\Schema\Thing\Intangible\Reservation
 * @package     Org\Schema
 * @see         https://schema.org/BusReservation
 * Date         30/03/2017
 */
class BusReservation extends \Org\Schema\Thing\Intangible\Reservation
{

	/**
	 * BusReservation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BusReservation toString.
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
	 * BusReservation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>