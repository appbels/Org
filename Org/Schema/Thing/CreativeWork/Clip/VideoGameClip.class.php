<?php

namespace Org\Schema\Thing\CreativeWork\Clip;

/**
 * Class VideoGameClip.
 * A short segment/part of a video game.
 * @author      AppBels <app.bels@gmail.com>
 * @name        VideoGameClip
 * @namespace   Org\Schema\Thing\CreativeWork\Clip
 * @package     Org\Schema
 * @see         https://schema.org/VideoGameClip
 * Date         02/03/2017
 */
class VideoGameClip extends \Org\Schema\Thing\CreativeWork\Clip
{

	/**
	 * VideoGameClip constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Clip::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * VideoGameClip toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Clip::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * VideoGameClip destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Clip::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>