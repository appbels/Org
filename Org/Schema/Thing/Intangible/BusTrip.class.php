<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class BusTrip.
 * A trip on a commercial bus line.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BusTrip
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/BusTrip
 * Date         11/03/2017
 */
class BusTrip extends \Org\Schema\Thing\Intangible
{

	/**
	 * The stop or station from which the bus arrives.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place\CivicStructure\BusStation|\Org\Schema\Thing\Place\CivicStructure\BusStop
	 */
	public $arrivalBusStop;

	/**
	 * The expected arrival time.
	 * @access  public
	 * @var     string
	 */
	public $arrivalTime;

	/**
	 * The name of the bus (e.g. Bolt Express).
	 * @access  public
	 * @var     string
	 */
	public $busName;

	/**
	 * The unique identifier for the bus.
	 * @access  public
	 * @var     string
	 */
	public $busNumber;

	/**
	 * The stop or station from which the bus departs.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place\CivicStructure\BusStation|\Org\Schema\Thing\Place\CivicStructure\BusStop
	 */
	public $departureBusStop;

	/**
	 * The expected departure time.
	 * @access  public
	 * @var     string
	 */
	public $departureTime;

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
	 * BusTrip constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BusTrip toString.
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
	 * BusTrip destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>