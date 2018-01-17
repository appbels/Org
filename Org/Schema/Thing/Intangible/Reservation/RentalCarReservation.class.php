<?php

namespace Org\Schema\Thing\Intangible\Reservation;

/**
 * Class RentalCarReservation
 * A reservation for a rental car.
 * Note: This type is for information about actual reservations,
 * e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RentalCarReservation
 * @namespace   Org\Schema\Thing\Intangible\Reservation
 * @package     Org\Schema
 * @see         https://schema.org/RentalCarReservation
 * Date         30/03/2017
 */
class RentalCarReservation extends \Org\Schema\Thing\Intangible\Reservation
{

	/**
	 * Where a rental car can be dropped off.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place
	 */
	public $dropoffLocation;

	/**
	 * When a rental car can be dropped off.
	 * @access	public
	 * @var		string
	 */
	public $dropoffTime;

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
	 * RentalCarReservation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RentalCarReservation toString.
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
	 * RentalCarReservation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>