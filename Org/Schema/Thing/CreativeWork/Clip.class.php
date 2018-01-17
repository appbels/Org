<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Clip.
 * A short TV or radio program or a segment/part of a program.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Clip
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Clip
 * Date         02/03/2017
 */
class Clip extends \Org\Schema\Thing\CreativeWork
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
	 * Position of the clip within an ordered group of clips.
	 * @access  public
	 * @var     int|string
	 */
	public $clipNumber;

	/**
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
	 * Directors can be associated with individual items or with a series, episode, clip.
	 * Supersedes directors.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $director;

	/**
	 * The composer of the soundtrack.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization\PerformingGroup\MusicGroup|\Org\Schema\Thing\Person
	 */
	public $musicBy;

	/**
	 * The episode to which this clip belongs.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Episode
	 */
	public $partOfEpisode;

	/**
	 * The season to which this episode belongs.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\CreativeWorkSeason
	 */
	public $partOfSeason;

	/**
	 * The series to which this episode or season belongs.
	 * Supersedes partOfTVSeries.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries
	 */
	public $partOfSeries;

	/**
	 * Clip constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Clip toString.
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
	 * Clip destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>