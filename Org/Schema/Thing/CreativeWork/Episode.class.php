<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Episode.
 * A media episode (e.g. TV, radio, video game) which can be part of a series or season.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Episode
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Episode
 * Date         04/03/2017
 */
class Episode extends \Org\Schema\Thing\CreativeWork
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
	 * Position of the episode within an ordered group of episodes.
	 * @access  public
	 * @var     int|string
	 */
	public $episodeNumber;

	/**
	 * The composer of the soundtrack.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization\PerformingGroup\MusicGroup|\Org\Schema\Thing\Person
	 */
	public $musicBy;

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
	 * The production company or studio responsible for the item e.g. series, video game, episode etc.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization
	 */
	public $productionCompany;

	/**
	 * The trailer of a movie or tv/radio series, season, episode, etc.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject\VideoObject
	 */
	public $trailer;

	/**
	 * Episode constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Episode toString.
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
	 * Episode destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>