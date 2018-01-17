<?php

namespace Org\Schema\Thing\CreativeWork\Clip;

/**
 * Class MovieClip.
 * A short segment/part of a movie.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MovieClip
 * @namespace   Org\Schema\Thing\CreativeWork\Clip
 * @package     Org\Schema
 * @see         https://schema.org/MovieClip
 * Date         02/03/2017
 */
class MovieClip extends \Org\Schema\Thing\CreativeWork\Clip
{

	/**
	 * MovieClip constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Clip::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MovieClip toString.
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
	 * MovieClip destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Clip::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>