<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class GamePlayMode.
 * Indicates whether this game is multi-player, co-op or single-player.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GamePlayMode
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/GamePlayMode
 * Date         12/03/2017
 */
class GamePlayMode extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * Play mode: CoOp.
	 * Co-operative games, where you play on the same team with friends.
	 * @see     https://schema.org/CoOp
	 * @var     string
	 */
	const CoOp = "https://schema.org/CoOp";

	/**
	 * Play mode: MultiPlayer.
	 * Requiring or allowing multiple human players to play simultaneously.
	 * @see     https://schema.org/MultiPlayer
	 * @var     string
	 */
	const MultiPlayer = "https://schema.org/MultiPlayer";

	/**
	 * Play mode: SinglePlayer. Which is played by a lone player.
	 * @see     https://schema.org/SinglePlayer
	 * @var     string
	 */
	const SinglePlayer = "https://schema.org/SinglePlayer";

	/**
	 * GamePlayMode constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GamePlayMode toString.
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
	 * GamePlayMode destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>