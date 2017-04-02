<?php

namespace Org\Schema\Thing\CreativeWork\SoftwareApplication;

/**
 * Class VideoGame.
 * A video game is an electronic game that involves human interaction with a
 * user interface to generate visual feedback on a video device.
 * @author      AppBels <app.bels@gmail.com>
 * @name        VideoGame
 * @namespace   Org\Schema\Thing\CreativeWork\SoftwareApplication
 * @package     Org\Schema
 * @see         https://schema.org/VideoGame
 * Date         04/03/2017
 */
class VideoGame extends \Org\Schema\Thing\CreativeWork\SoftwareApplication
{

	/**
	 * An actor, e.g. in tv, radio, movie, video games etc., or in an event.
	 * Actors can be associated with individual items or with a series, episode, clip.
	 * Supersedes actors.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $actor;

	/**
	 * Cheat codes to the game.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $cheatCode;

	/**
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
	 * Directors can be associated with individual items or with a series, episode, clip.
	 * Supersedes directors.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $director;

	/**
	 * The electronic systems used to play video games.
	 * @access  public
	 * @var     string|\Org\Schema\Thing
	 */
	public $gamePlatform;

	/**
	 * The server on which it is possible to play the game.
	 * Inverse property: game.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\GameServer
	 */
	public $gameServer;

	/**
	 * Links to tips, tactics, etc.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $gameTip;

	/**
	 * The composer of the soundtrack.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization\PerformingGroup\MusicGroup|\Org\Schema\Thing\Person
	 */
	public $musicBy;

	/**
	 * Indicates whether this game is multi-player, co-op or single-player.
	 * The game can be marked as multi-player, co-op and single-player at the same time.
	 * One constant of \Org\Schema\Thing\Intangible\Enumeration\GamePlayMode
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\GamePlayMode
	 * @var     string
	 */
	public $playMode;

	/**
	 * The trailer of a movie or tv/radio series, season, episode, etc.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject\VideoObject
	 */
	public $trailer;

	###################################################################
	##                                                               ##
	## Game properties                                               ##
	##                                                               ##
	###################################################################

	/**
	 * A piece of data that represents a particular aspect of a fictional character
	 * (skill, power, character points, advantage, disadvantage).
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $characterAttribute;

	/**
	 * An item is an object within the game world that can be collected by a player or,
	 * occasionally, a non-player character.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $gameItem;

	/**
	 * Real or fictional location of the game (or part of game).
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Place|\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
	 */
	public $gameLocation;

	/**
	 * Indicate how many people can play this game (minimum, maximum, or range).
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $numberOfPlayers;

	/**
	 * The task that a player-controlled character, or group of characters may complete in order
	 * to gain a reward.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $quest;

	/**
	 * VideoGame constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\SoftwareApplication::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * VideoGame toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\SoftwareApplication::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * VideoGame destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\SoftwareApplication::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>