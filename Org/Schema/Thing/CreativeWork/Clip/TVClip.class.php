<?php

namespace Org\Schema\Thing\CreativeWork\Clip;

/**
 * Class TVClip.
 * A short TV program or a segment/part of a TV program.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TVClip
 * @namespace   Org\Schema\Thing\CreativeWork\Clip
 * @package     Org\Schema
 * @see         https://schema.org/TVClip
 * Date         02/03/2017
 */
class TVClip extends \Org\Schema\Thing\CreativeWork\Clip
{

	/**
	 * TVClip constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Clip::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TVClip toString.
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
	 * TVClip destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Clip::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>