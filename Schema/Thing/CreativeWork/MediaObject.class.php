<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class MediaObject.
 * A media object, such as an image, video, or audio object embedded in a web page or a
 * downloadable dataset i.e. DataDownload.
 * Note that a creative work may have many media objects associated with it on the same web page.
 * For example, a page about a single song (MusicRecording) may have a music video (VideoObject),
 * and a high and low bandwidth audio stream (2 AudioObject's).
 * @author      AppBels <app.bels@gmail.com>
 * @name        MediaObject
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/MediaObject
 * Date         04/03/2017
 */
class MediaObject extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * A NewsArticle associated with the Media Object.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Article\NewsArticle
	 */
	public $associatedArticle;

	/**
	 * The bitrate of the media object.
	 * @access  public
	 * @var     string
	 */
	public $bitrate;

	/**
	 * File size in (mega/kilo) bytes.
	 * @access  public
	 * @var     string
	 */
	public $contentSize;

	/**
	 * Actual bytes of the media object, for example the image file or video file.
	 * @access  public
	 * @var     string
	 */
	public $contentUrl;

	/**
	 * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $duration;

	/**
	 * A URL pointing to a player for a specific video.
	 * In general, this is the information in the src element of an embed tag and should not
	 * be the same as the content of the loc tag.
	 * @access  public
	 * @var     string
	 */
	public $embedUrl;

	/**
	 * The CreativeWork encoded by this media object.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $encodesCreativeWork;

	/**
	 * mp3, mpeg4, etc.
	 * @access  public
	 * @var     string
	 */
	public $encodingFormat;

	/**
	 * Date the content expires and is no longer useful or available. Useful for videos.
	 * @access  public
	 * @var     string
	 */
	public $expires;

	/**
	 * The height of the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Distance|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $height;

	/**
	 * Player type required—for example, Flash or Silverlight.
	 * @access  public
	 * @var     string
	 */
	public $playerType;

	/**
	 * The production company or studio responsible for the item e.g. series, video game, episode etc.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization
	 */
	public $productionCompany;

	/**
	 * The regions where the media is allowed.
	 * If not specified, then it's assumed to be allowed everywhere.
	 * Specify the countries in ISO 3166 format.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place
	 */
	public $regionsAllowed;

	/**
	 * Indicates if use of the media require a subscription (either paid or free).
	 * Allowed values are true or false (note that an earlier version had 'yes', 'no').
	 * @access  public
	 * @var     bool
	 */
	public $requiresSubscription;

	/**
	 * Date when this media object was uploaded to this site.
	 * @access  public
	 * @var     string
	 */
	public $uploadDate;

	/**
	 * The width of the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Distance|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $width;

	/**
	 * MediaObject constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MediaObject toString.
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
	 * MediaObject destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>