<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Game.
 * The Game type represents things which are games.
 * These are typically rule-governed recreational activities, e.g. role-playing games in
 * which players assume the role of characters in a fictional setting.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Game
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Game
 * Date         04/03/2017
 */
class Game extends \Org\Schema\Thing\CreativeWork
{

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
	 * Game constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Game toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Game destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>