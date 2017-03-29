<?php

namespace Org\Schema\Thing\Intangible\Reservation;

/**
 * Class ReservationPackage
 * A group of multiple reservations with common values for all sub-reservations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ReservationPackage
 * @namespace   Org\Schema\Thing\Intangible\Reservation
 * @package     Org\Schema
 * @see         https://schema.org/ReservationPackage
 * Date         30/03/2017
 */
class ReservationPackage extends \Org\Schema\Thing\Intangible\Reservation
{

	/**
	 * The individual reservations included in the package.
	 * Typically a repeated property.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Reservation
	 */
	public $subReservation;

	/**
	 * ReservationPackage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ReservationPackage toString.
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
	 * ReservationPackage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Reservation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>