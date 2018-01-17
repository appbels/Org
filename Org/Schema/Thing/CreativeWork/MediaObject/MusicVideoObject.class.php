<?php

namespace Org\Schema\Thing\CreativeWork\MediaObject;

/**
 * Class MusicVideoObject.
 * A music video file.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicVideoObject
 * @namespace   Org\Schema\Thing\CreativeWork\MediaObject
 * @package     Org\Schema
 * @see         https://schema.org/MusicVideoObject
 * Date         04/03/2017
 */
class MusicVideoObject extends \Org\Schema\Thing\CreativeWork\MediaObject
{

	/**
	 * MusicVideoObject constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicVideoObject toString.
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
	 * MusicVideoObject destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>