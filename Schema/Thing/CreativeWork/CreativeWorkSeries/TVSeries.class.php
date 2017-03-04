<?php

namespace Org\Schema\Thing\CreativeWork\CreativeWorkSeries;

/**
 * Class TVSeries.
 * CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TVSeries
 * @namespace   Org\Schema\Thing\CreativeWork\CreativeWorkSeries
 * @package     Org\Schema
 * @see         https://schema.org/TVSeries
 * Date         04/03/2017
 */
class TVSeries extends \Org\Schema\Thing\CreativeWork\CreativeWorkSeries
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
	 * A season that is part of the media series.
	 * Supersedes season.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\CreativeWorkSeason
	 */
	public $containsSeason;

	/**
	 * The country of the principal offices of the production company or
	 * individual responsible for the movie or program.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place\AdministrativeArea\Country
	 */
	public $countryOfOrigin;

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
	 * The number of seasons in this series.
	 * @access  public
	 * @var     int
	 */
	public $numberOfSeasons;

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
	 * TVSeries constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TVSeries toString.
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
	 * TVSeries destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>