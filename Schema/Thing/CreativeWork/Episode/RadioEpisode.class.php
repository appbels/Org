<?php

namespace Org\Schema\Thing\CreativeWork\Episode;

/**
 * Class RadioEpisode.
 * A radio episode which can be part of a series or season.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RadioEpisode
 * @namespace   Org\Schema\Thing\CreativeWork\Episode
 * @package     Org\Schema
 * @see         https://schema.org/RadioEpisode
 * Date         04/03/2017
 */
class RadioEpisode extends \Org\Schema\Thing\CreativeWork\Episode
{

	/**
	 * RadioEpisode constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Episode::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RadioEpisode toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Episode::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * RadioEpisode destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Episode::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>