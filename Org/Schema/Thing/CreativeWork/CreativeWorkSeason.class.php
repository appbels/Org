<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class CreativeWorkSeason.
 * A media season e.g. tv, radio, video game etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CreativeWorkSeason
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/CreativeWorkSeason
 * Date         02/03/2017
 */
class CreativeWorkSeason extends \Org\Schema\Thing\CreativeWork
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
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
	 * Directors can be associated with individual items or with a series, episode, clip.
	 * Supersedes directors.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $director;

	/**
	 * The end date and time of the item (in ISO 8601 date format).
	 * @access  public
	 * @var     string
	 */
	public $endDate;

	/**
	 * An episode of a tv, radio or game media within a series or season. Supersedes episodes.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Episode
	 */
	public $episode;

	/**
	 * The number of episodes in this season or series.
	 * @access  public
	 * @var     int
	 */
	public $numberOfEpisodes;

	/**
	 * The series to which this episode or season belongs. Supersedes partOfTVSeries.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries
	 */
	public $partOfSeries;

	/**
	 * The production company or studio responsible for the item e.g. series, video game, episode etc.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization
	 */
	public $productionCompany;

	/**
	 * Position of the season within an ordered group of seasons.
	 * @access  public
	 * @var     int|string
	 */
	public $seasonNumber;

	/**
	 * The start date and time of the item (in ISO 8601 date format).
	 * @access  public
	 * @var     string
	 */
	public $startDate;

	/**
	 * The trailer of a movie or tv/radio series, season, episode, etc.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject\VideoObject
	 */
	public $trailer;

	/**
	 * CreativeWorkSeason constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CreativeWorkSeason toString.
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
	 * CreativeWorkSeason destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>