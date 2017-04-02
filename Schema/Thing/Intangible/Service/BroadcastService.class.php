<?php

namespace Org\Schema\Thing\Intangible\Service;

/**
 * Class BroadcastService
 * A delivery service through which content is provided via broadcast over the air or online.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BroadcastService
 * @namespace   Org\Schema\Thing\Intangible\Service
 * @package     Org\Schema
 * @see         https://schema.org/BroadcastService
 * Date         02/04/2017
 */
class BroadcastService extends \Org\Schema\Thing\Intangible\Service
{

	/**
	 * The media network(s) whose content is broadcast on this station.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization
	 */
	public $broadcastAffiliateOf;

	/**
	 * The name displayed in the channel guide.
	 * For many US affiliates, it is the network name.
	 * @access	public
	 * @var		string
	 */
	public $broadcastDisplayName;

	/**
	 * The timezone in ISO 8601 format for which the service bases its broadcasts
	 * @access	public
	 * @var		string
	 */
	public $broadcastTimezone;

	/**
	 * The organization owning or operating the broadcast service.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization
	 */
	public $broadcaster;

	/**
	 * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Service\BroadcastService
	 */
	public $parentService;

	/**
	 * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
	 * @access	public
	 * @var		string
	 */
	public $videoFormat;

	/**
	 * BroadcastService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BroadcastService toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * BroadcastService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>