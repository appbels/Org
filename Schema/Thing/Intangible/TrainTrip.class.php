<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class TrainTrip
 * A trip on a commercial train line.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TrainTrip
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/TrainTrip
 * Date         02/04/2017
 */
class TrainTrip extends \Org\Schema\Thing\Intangible
{

	/**
	 * The platform where the train arrives.
	 * @access	public
	 * @var		string
	 */
	public $arrivalPlatform;

	/**
	 * The station where the train trip ends.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place\CivicStructure\TrainStation
	 */
	public $arrivalStation;

	/**
	 * The expected arrival time.
	 * @access  public
	 * @var     string
	 */
	public $arrivalTime;

	/**
	 * The platform from which the train departs.
	 * @access	public
	 * @var		string
	 */
	public $departurePlatform;

	/**
	 * The station from which the train departs.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place\CivicStructure\TrainStation
	 */
	public $departureStation;

	/**
	 * The expected departure time.
	 * @access  public
	 * @var     string
	 */
	public $departureTime;

	/**
	 * The service provider, service operator, or service performer; the goods producer.
	 * Another party (a seller) may offer those services or goods on behalf of the provider.
	 * A provider may also serve as the seller. Supersedes carrier.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $provider;

	/**
	 * The name of the train (e.g. The Orient Express).
	 * @access	public
	 * @var		string
	 */
	public $trainName;

	/**
	 * The unique identifier for the train.
	 * @access	public
	 * @var		string
	 */
	public $trainNumber;

	/**
	 * TrainTrip constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TrainTrip toString.
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
	 * TrainTrip destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>