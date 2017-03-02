<?php

namespace Org\Schema\Thing\CreativeWork\Clip;

/**
 * Class RadioClip.
 * A short radio program or a segment/part of a radio program.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RadioClip
 * @namespace   Org\Schema\Thing\CreativeWork\Clip
 * @package     Org\Schema
 * @see         https://schema.org/RadioClip
 * Date         02/03/2017
 */
class RadioClip extends \Org\Schema\Thing\CreativeWork\Clip
{

	/**
	 * RadioClip constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Clip::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RadioClip toString.
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
	 * RadioClip destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Clip::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>