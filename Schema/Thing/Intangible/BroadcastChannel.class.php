<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class BroadcastChannel.
 * A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BroadcastChannel
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/BroadcastChannel
 * Date         11/03/2017
 */
class BroadcastChannel extends \Org\Schema\Thing\Intangible
{

	/**
	 * The unique address by which the BroadcastService can be identified in a provider lineup.
	 * In US, this is typically a number.
	 * @access  public
	 * @var     string
	 */
	public $broadcastChannelId;

	/**
	 * The type of service required to have access to the channel (e.g. Standard or Premium).
	 * @access  public
	 * @var     string
	 */
	public $broadcastServiceTier;

	/**
	 * The CableOrSatelliteService offering the channel.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Service\CableOrSatelliteService
	 */
	public $inBroadcastLineup;

	/**
	 * The BroadcastService offered on this channel.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Service\BroadcastService
	 */
	public $providesBroadcastService;

	/**
	 * BroadcastChannel constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BroadcastChannel toString.
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
	 * BroadcastChannel destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>