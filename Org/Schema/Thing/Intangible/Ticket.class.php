<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Ticket
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Ticket
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Ticket
 * Date         02/04/2017
 */
class Ticket extends \Org\Schema\Thing\Intangible
{

	/**
	 * The date the ticket was issued.
	 * @access	public
	 * @var		string
	 */
	public $dateIssued;

	/**
	 * The organization issuing the ticket or permit.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization
	 */
	public $issuedBy;

	/**
	 * The currency (in 3-letter ISO 4217 format) of the price or a price component,
	 * when attached to PriceSpecification and its subtypes.
	 * @access	public
	 * @var		string
	 */
	public $priceCurrency;

	/**
	 * The unique identifier for the ticket.
	 * @access	public
	 * @var		string
	 */
	public $ticketNumber;

	/**
	 * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
	 * @access	public
	 * @var		string
	 */
	public $ticketToken;

	/**
	 * The seat associated with the ticket.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Seat
	 */
	public $ticketedSeat;

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
	 * Ticket constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Ticket toString.
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
	 * Ticket destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>