<?php

namespace Org\Schema\Thing\Event;

/**
 * Class ScreeningEvent.
 * A screening of a movie or other video.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ScreeningEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/ScreeningEvent
 * Date         04/03/2017
 */
class ScreeningEvent extends \Org\Schema\Thing\Event
{

	/**
	 * Languages in which subtitles/captions are available, in IETF BCP 47 standard format.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\Language
	 */
	public $subtitleLanguage;

	/**
	 * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
	 * @access  public
	 * @var     string
	 */
	public $videoFormat;

	/**
	 * The movie presented during this event.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Movie
	 */
	public $workPresented;

	/**
	 * ScreeningEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ScreeningEvent toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ScreeningEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>