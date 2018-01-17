<?php

namespace Org\Schema\Thing\Intangible\BroadcastChannel;

/**
 * Class RadioChannel.
 * A unique instance of a radio BroadcastService on a CableOrSatelliteService lineup.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RadioChannel
 * @namespace   Org\Schema\Thing\Intangible\BroadcastChannel
 * @package     Org\Schema
 * @see         https://schema.org/RadioChannel
 * Date         11/03/2017
 */
class RadioChannel extends \Org\Schema\Thing\Intangible\BroadcastChannel
{

	/**
	 * RadioChannel constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\BroadcastChannel::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RadioChannel toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\BroadcastChannel::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * RadioChannel destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\BroadcastChannel::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>