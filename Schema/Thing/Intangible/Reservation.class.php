<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Reservation
 * Describes a reservation for travel, dining or an event.
 * Some reservations require tickets.
 * Note: This type is for information about actual reservations, e.g. in confirmation emails or
 * HTML pages with individual confirmations of reservations.
 * For offers of tickets, restaurant reservations, flights, or rental cars, use Offer.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Reservation
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Reservation
 * Date         30/03/2017
 */
class Reservation extends \Org\Schema\Thing\Intangible
{

	/**
	 * The date and time the reservation was booked.
	 * @access	public
	 * @var		string
	 */
	public $bookingTime;

	/**
	 * An entity that arranges for an exchange between a buyer and a seller.
	 * In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.
	 * If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
	 * Supersedes bookingAgent.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $broker;

	/**
	 * The date and time the reservation was modified.
	 * @access	public
	 * @var		string
	 */
	public $modifiedTime;

	/**
	 * The currency (in 3-letter ISO 4217 format) of the price or a price component,
	 * when attached to PriceSpecification and its subtypes.
	 * @access	public
	 * @var		string
	 */
	public $priceCurrency;

	/**
	 * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\ProgramMembership
	 */
	public $programMembershipUsed;

	/**
	 * The service provider, service operator, or service performer; the goods producer.
	 * Another party (a seller) may offer those services or goods on behalf of the provider.
	 * A provider may also serve as the seller.
	 * Supersedes carrier.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $provider;

	/**
	 * The thing -- flight, event, restaurant,etc. being reserved.
	 * @access	public
	 * @var		\Org\Schema\Thing
	 */
	public $reservationFor;

	/**
	 * A unique identifier for the reservation.
	 * @access	public
	 * @var		string
	 */
	public $reservationId;

	/**
	 * The current status of the reservation.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\ReservationStatusType
	 * @var		string
	 */
	public $reservationStatus;

	/**
	 * A ticket associated with the reservation.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Ticket
	 */
	public $reservedTicket;

	/**
	 * The total price for the reservation or ticket, including applicable taxes, shipping, etc.
	 * @access	public
	 * @var		int|string|\Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
	 */
	public $totalPrice;

	/**
	 * The person or organization the reservation or ticket is for.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $underName;

	/**
	 * Reservation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Reservation toString.
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
	 * Reservation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>