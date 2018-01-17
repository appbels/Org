<?php

namespace Org\Schema\Thing\CreativeWork\CreativeWorkSeries;

/**
 * Class VideoGameSeries.
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        VideoGameSeries
 * @namespace   Org\Schema\Thing\CreativeWork\CreativeWorkSeries
 * @package     Org\Schema
 * @see         https://schema.org/VideoGameSeries
 * Date         04/03/2017
 */
class VideoGameSeries extends \Org\Schema\Thing\CreativeWork\CreativeWorkSeries
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
	 * A piece of data that represents a particular aspect of a fictional character
	 * (skill, power, character points, advantage, disadvantage).
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $characterAttribute;

	/**
	 * Cheat codes to the game.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $cheatCode;

	/**
	 * A season that is part of the media series.
	 * Supersedes season.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\CreativeWorkSeason
	 */
	public $containsSeason;

	/**
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
	 * Directors can be associated with individual items or with a series, episode, clip.
	 * Supersedes directors.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $director;

	/**
	 * An episode of a tv, radio or game media within a series or season.
	 * Supersedes episodes.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Episode
	 */
	public $episode;

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
	 * The electronic systems used to play video games.
	 * @access  public
	 * @var     string|\Org\Schema\Thing
	 */
	public $gamePlatform;

	/**
	 * The composer of the soundtrack.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization\PerformingGroup\MusicGroup|\Org\Schema\Thing\Person
	 */
	public $musicBy;

	/**
	 * The number of episodes in this season or series.
	 * @access  public
	 * @var     int
	 */
	public $numberOfEpisodes;

	/**
	 * Indicate how many people can play this game (minimum, maximum, or range).
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $numberOfPlayers;

	/**
	 * The number of seasons in this series.
	 * @access  public
	 * @var     int
	 */
	public $numberOfSeasons;

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
	 * The production company or studio responsible for the item e.g. series, video game, episode etc.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization
	 */
	public $productionCompany;

	/**
	 * The task that a player-controlled character, or group of characters may complete
	 * in order to gain a reward.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $quest;

	/**
	 * The trailer of a movie or tv/radio series, season, episode, etc.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject\VideoObject
	 */
	public $trailer;

	/**
	 * VideoGameSeries constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * VideoGameSeries toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * VideoGameSeries destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>