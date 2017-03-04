<?php

namespace Org\Schema\Thing\CreativeWork\MediaObject;

/**
 * Class VideoObject.
 * A video file.
 * @author      AppBels <app.bels@gmail.com>
 * @name        VideoObject
 * @namespace   Org\Schema\Thing\CreativeWork\MediaObject
 * @package     Org\Schema
 * @see         https://schema.org/VideoObject
 * Date         04/03/2017
 */
class VideoObject extends \Org\Schema\Thing\CreativeWork\MediaObject
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
	 * The caption for this object.
	 * @access  public
	 * @var     string
	 */
	public $caption;

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
	 * Thumbnail image for an image or video.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject\ImageObject
	 */
	public $thumbnail;

	/**
	 * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
	 * @access  public
	 * @var     string
	 */
	public $transcript;

	/**
	 * The frame size of the video.
	 * @access  public
	 * @var     string
	 */
	public $videoFrameSize;

	/**
	 * The quality of the video.
	 * @access  public
	 * @var     string
	 */
	public $videoQuality;

	/**
	 * VideoObject constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * VideoObject toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * VideoObject destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>