<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class GameServer.
 * Server that provides game interaction in a multiplayer game.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GameServer
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/GameServer
 * Date         15/03/2017
 */
class GameServer extends \Org\Schema\Thing\Intangible
{

	/**
	 * Video game which is played on this server.
	 * Inverse property: gameServer.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Game\VideoGame
	 */
	public $game;

	/**
	 * Number of players on the server.
	 * @access  public
	 * @var     int
	 */
	public $playersOnline;

	/**
	 * Status of a game server.
	 * One const of GameServerStatus.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\GameServerStatus
	 * @var     string
	 */
	public $serverStatus;

	/**
	 * GameServer constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GameServer toString.
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
	 * GameServer destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>