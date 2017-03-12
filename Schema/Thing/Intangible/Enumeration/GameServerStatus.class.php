<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class GameServerStatus.
 * Status of a game server.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GameServerStatus
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/GameServerStatus
 * Date         12/03/2017
 */
class GameServerStatus extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * Game server status: OfflinePermanently.
	 * Server is offline and not available.
	 * @see     https://schema.org/OfflinePermanently
	 * @var     string
	 */
	const OfflinePermanently = "https://schema.org/OfflinePermanently";

	/**
	 * Game server status: OfflineTemporarily.
	 * Server is offline now but it can be online soon.
	 * @see     https://schema.org/OfflineTemporarily
	 * @var     string
	 */
	const OfflineTemporarily = "https://schema.org/OfflineTemporarily";

	/**
	 * Game server status: Online.
	 * Server is available.
	 * @see     https://schema.org/Online
	 * @var     string
	 */
	const Online = "https://schema.org/Online";

	/**
	 * Game server status: OnlineFull.
	 * Server is online but unavailable.
	 * The maximum number of players has reached.
	 * @see     https://schema.org/OnlineFull
	 * @var     string
	 */
	const OnlineFull = "https://schema.org/OnlineFull";

	/**
	 * GameServerStatus constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GameServerStatus toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * GameServerStatus destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>