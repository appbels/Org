<?php

namespace Org\Schema\Thing\CreativeWork\MediaObject;

/**
 * Class ImageObject.
 * An image file.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ImageObject
 * @namespace   Org\Schema\Thing\CreativeWork\MediaObject
 * @package     Org\Schema
 * @see         https://schema.org/ImageObject
 * Date         04/03/2017
 */
class ImageObject extends \Org\Schema\Thing\CreativeWork\MediaObject
{

	/**
	 * The caption for this object.
	 * @access  public
	 * @var     string
	 */
	public $caption;

	/**
	 * exif data for this object.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\StructuredValue\PropertyValue
	 */
	public $exifData;

	/**
	 * Indicates whether this image is representative of the content of the page.
	 * @access  public
	 * @var     bool
	 */
	public $representativeOfPage;

	/**
	 * Thumbnail image for an image or video.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject\ImageObject
	 */
	public $thumbnail;

	/**
	 * ImageObject constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ImageObject toString.
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
	 * ImageObject destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>