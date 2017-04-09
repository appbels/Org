<?php

namespace Org\Schema\Thing\Organization\PerformingGroup;

/**
 * Class TheaterGroup
 * A theater group or company, for example, the Royal Shakespeare Company or Druid Theatre.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TheaterGroup
 * @namespace   Org\Schema\Thing\Organization\PerformingGroup
 * @package     Org\Schema
 * @see         https://schema.org/TheaterGroup
 * Date         09/04/2017
 */
class TheaterGroup extends \Org\Schema\Thing\Organization\PerformingGroup
{

	/**
	 * TheaterGroup constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\PerformingGroup::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TheaterGroup toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\PerformingGroup::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * TheaterGroup destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\PerformingGroup::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>