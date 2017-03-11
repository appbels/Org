<?php

namespace Org\Schema\Thing\Intangible\BroadcastChannel;

/**
 * Class TelevisionChannel.
 * A unique instance of a television BroadcastService on a CableOrSatelliteService lineup.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TelevisionChannel
 * @namespace   Org\Schema\Thing\Intangible\BroadcastChannel
 * @package     Org\Schema
 * @see         https://schema.org/TelevisionChannel
 * Date         11/03/2017
 */
class TelevisionChannel extends \Org\Schema\Thing\Intangible\BroadcastChannel
{

	/**
	 * TelevisionChannel constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\BroadcastChannel::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TelevisionChannel toString.
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
	 * TelevisionChannel destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\BroadcastChannel::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>