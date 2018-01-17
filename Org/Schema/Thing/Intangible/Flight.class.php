<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Flight.
 * An airline flight.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Flight
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Flight
 * Date         15/03/2017
 */
class Flight extends \Org\Schema\Thing\Intangible
{

	/**
	 * The kind of aircraft (e.g., "Boeing 747").
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Product\Vehicle
	 */
	public $aircraft;

	/**
	 * The airport where the flight terminates.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place\CivicStructure\Airport
	 */
	public $arrivalAirport;

	/**
	 * Identifier of the flight's arrival gate.
	 * @access  public
	 * @var     string
	 */
	public $arrivalGate;

	/**
	 * Identifier of the flight's arrival terminal.
	 * @access  public
	 * @var     string
	 */
	public $arrivalTerminal;

	/**
	 * The expected arrival time.
	 * @access  public
	 * @var     string
	 */
	public $arrivalTime;

	/**
	 * The type of boarding policy used by the airline (e.g. zone-based or group-based).
	 * One const of BoardingPolicyType
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\BoardingPolicyType
	 * @var     string
	 */
	public $boardingPolicy;

	/**
	 * The airport where the flight originates.s
	 * @access  public
	 * @var     \Org\Schema\Thing\Place\CivicStructure\Airport
	 */
	public $departureAirport;

	/**
	 * Identifier of the flight's departure gate.
	 * @access  public
	 * @var     string
	 */
	public $departureGate;

	/**
	 * Identifier of the flight's departure terminal.
	 * @access  public
	 * @var     string
	 */
	public $departureTerminal;

	/**
	 * The expected departure time.
	 * @access  public
	 * @var     string
	 */
	public $departureTime;

	/**
	 * The estimated time the flight will take.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $estimatedFlightDuration;

	/**
	 * The distance of the flight.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\Quantity\Distance
	 */
	public $flightDistance;

	/**
	 * The unique identifier for a flight including the airline IATA code.
	 * For example, if describing United flight 110, where the IATA code for United is 'UA',
	 * the flightNumber is 'UA110'.
	 * @access  public
	 * @var     string
	 */
	public $flightNumber;

	/**
	 * Description of the meals that will be provided or available for purchase.
	 * @access  public
	 * @var     string
	 */
	public $mealService;

	/**
	 * The service provider, service operator, or service performer; the goods producer.
	 * Another party (a seller) may offer those services or goods on behalf of the provider.
	 * A provider may also serve as the seller.
	 * Supersedes carrier.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $provider;

	/**
	 * An entity which offers (sells / leases / lends / loans) the services / goods.
	 * A seller may also be a provider.
	 * Supersedes merchant, vendor.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $seller;

	/**
	 * The time when a passenger can check into the flight online.
	 * @access  public
	 * @var     string
	 */
	public $webCheckinTime;

	/**
	 * Flight constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Flight toString.
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
	 * Flight destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>